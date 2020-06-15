
			requestAnimFrame = (function() {
				return window.requestAnimationFrame ||
				window.webkitRequestAnimationFrame ||
				window.mozRequestAnimationFrame ||
				window.oRequestAnimationFrame ||
				window.msRequestAnimationFrame ||
				function(callback, element) {
					window.setTimeout(callback, 1000/60);
				};
			})();
			
			
			function Controller(id)
			{
				Controller.main = this;
				this.svg = getEl(id);
				
				var svg = this.svg
				svg.addEventListener("mousedown",	this.onMD, false);
				svg.addEventListener("mousemove",	this.onMM, false);
				svg.addEventListener("mouseup",		this.onMU, false);
				
				svg.addEventListener("touchmove",	this.blck, false);	
				svg.addEventListener("touchstart",	this.onMD, false);
				svg.addEventListener("touchend",	this.onMU, false);
				svg.addEventListener("touchmove",	this.onMM, false);
				
				window.addEventListener("resize",	this.onRS, false);
				
				getEl("phCHK").addEventListener("click", Controller.chPhysics, false);
				getEl("tdCHK").addEventListener("click", Controller.ch3D, false);
				getEl("lbCHK").addEventListener("click", Controller.chLabels, false);
			
				// getEl("clBTN").addEventListener("click", Controller.minCol, false);
				// getEl("ebBTN").addEventListener("click", Controller.embCode, false);
				// getEl("tnBTN").addEventListener("click", Controller.tinyURL, false);
				
				getEl("inText").addEventListener("keypress", function(e) {if(e.keyCode==13) rebuildURL();}, false);
			
				this.c3d = { camz : 900, ang:0, d:0.015 };
				
				this.circs = [];
				this.lines = [];
				this.labls = [];
				
				window.onhashchange = function () {	Controller.rebuild(); }
				this.w = window.innerWidth-20;
				this.h = 460;
				this.hw= this.w/2;
				this.hh= this.h/2;
				this.labels = false;
				
				this.g = new Grapher2D();
				//g.SetBounds(-hw, hw, -230, 230, -hw, hw);
				
				this.rRNG = document.getElementById("rRNG");
				this.aRNG = document.getElementById("aRNG");
				
				this.rRNG.addEventListener("change", this.repChange);
				this.aRNG.addEventListener("change", this.attChange);
				
				this.repChange();
				this.attChange();
				
				Controller.rebuild();
				Controller.onEF();
			}
			
			Controller.prototype.onMD = function(e){Controller.main.g.SetDragged	(mouseX(e)-Controller.main.hw, mouseY(e)-Controller.main.hh, 30);}
			Controller.prototype.onMM = function(e){Controller.main.g.MoveDragged	(mouseX(e)-Controller.main.hw, mouseY(e)-Controller.main.hh);}
			Controller.prototype.onMU = function(e){Controller.main.g.StopDragging();}
			Controller.prototype.blck = function(e) { e.preventDefault() ; }
			
			Controller.prototype.onRS = function(e){ Controller.main.hw = window.innerWidth/2; Controller.main.redraw(); }
			
			Controller.chPhysics = function(e) { Controller.main.changePhysics(); }
			Controller.prototype.changePhysics = function() {this.g.SwitchPhysics(); getEl("phCHK").checked = this.g.physics; }
			
			Controller.ch3D = function(e) { Controller.main.change3D(); }
			Controller.prototype.change3D = function() { this.g.Switch3D(); getEl("tdCHK").checked = this.g.is3D; }
			
			Controller.chLabels = function(e) { Controller.main.changeLabels(); }
			Controller.prototype.changeLabels = function() 
			{
				this.labels = !this.labels;
				for(var i=0; i<this.labls.length; i++) this.labls[i].style.visibility = (this.labels?"visible":"hidden");
				getEl("lbCHK").checked = this.labels;
			}
			
			Controller.minCol = function(e) { Controller.main.minColoring(); }
			Controller.prototype.minColoring = function(e) 
			{
				this.g.MinColoring();
				for(var i=0; i<this.circs.length; i++)
					this.circs[i].setAttribute("fill", colors[this.g.vcolors[i]%colors.length]);
			}
		
			
			Controller.prototype.repChange = function(e)
			{
				var th = Controller.main;
				th.g.repulsion = 4*th.rRNG.value;
				th.g.stable = false;
			}
			
			Controller.prototype.attChange = function(e)
			{
				var th = Controller.main;
				th.g.attraction = 0.001*th.aRNG.value;
				th.g.stable = false;
			}
			
			Controller.rebuild = function()
			{
				Controller.prototype._rebuildGraph.call(Controller.main);
			}
			
			Controller.prototype._rebuildGraph = function()
			{
				var gr = window.location.href.slice(window.location.href.indexOf('#') + 1);
				if(window.location.href.indexOf("#")<1 || gr=="")
				{
					gr = "3:1-2,2-3,3-1"
					window.location = '#'+gr;
				}
				getEl("inText").value = gr;

				this.g.MakeGraph(gr);
				
				var svg = this.svg;
				
				for(var i=0; i<this.circs.length; i++) svg.removeChild(this.circs[i]);
				for(var i=0; i<this.lines.length; i++) svg.removeChild(this.lines[i]);
				for(var i=0; i<this.labls.length; i++) svg.removeChild(this.labls[i]);
				this.circs = [];
				this.lines = [];
				this.labls = [];
				
				for(i=0; i<this.g.graph.edgesl.length; i++)
				{
					var l = document.createElementNS("http://www.w3.org/2000/svg", "line");
					l.setAttribute("style", "stroke:#777;stroke-width:3");
					svg.appendChild(l);
					this.lines.push(l);
				}
				for(i=0; i<this.g.graph.n; i++)
				{
					var c = document.createElementNS("http://www.w3.org/2000/svg", "circle");
					c.setAttribute("fill", "#E30613");
					c.setAttribute("style", "cursor:move;");
					svg.appendChild(c);
					this.circs.push(c);
					
					var t = document.createElementNS("http://www.w3.org/2000/svg", "text");
					t.setAttribute("fill", "#fff");
					t.setAttribute("font-size", "18");
					t.setAttribute("style",  "pointer-events:none;");
					t.style.visibility = (this.labels?"visible":"hidden");
					t.textContent = i+1;
					svg.appendChild(t);
					this.labls.push(t);
				}
				
				if(!this.g.physics) this.changePhysics();
				this.redraw();
			}
			
			Controller.prototype.redraw = function()
			{
				//if(g.is3D) g.vertices.sort(sorter);
				
				var c3d = this.c3d;
				var g = this.g;
				
				c3d.ang += c3d.d;
				var sn = Math.sin(this.c3d.ang);
				var cs = Math.cos(this.c3d.ang);
				for(var i=0; i<g.graph.n; i++)
				{
					var nx, ny, nz;
					var v = g.vertices[i];
					if(g.is3D)
					{
						nx = cs*v.x - sn*v.z;
						nz = sn*v.x + cs*v.z;
						ny = v.y;
					}
					else {nx = v.x; ny = v.y; nz = v.z;}
					v.px = c3d.camz*nx/(c3d.camz - nz);
					v.py = c3d.camz*ny/(c3d.camz - nz);
					v.pz = nz;
				}
				
				var hw = this.hw, hh = this.hh;
			
				for(i=0; i<g.graph.edgesl.length; i++)
				{
					var u = g.vertices[g.graph.edgesl[i]];
					var v = g.vertices[g.graph.edgesr[i]];
					
					this.lines[i].setAttribute("x1", u.px + hw);
					this.lines[i].setAttribute("y1", u.py + hh);
					this.lines[i].setAttribute("x2", v.px + hw);
					this.lines[i].setAttribute("y2", v.py + hh);
				}
				
				var iw, kw;
				for(var i=0; i<g.graph.n; i++)
				{
					var v = g.vertices[i];
					iw = c3d.camz*13/(c3d.camz-v.pz);
					
					this.circs[i].setAttribute("cx", hw+v.px);
					this.circs[i].setAttribute("cy", hh+v.py);
					this.circs[i].setAttribute("r", Math.max(0,iw));
					
					this.labls[i].setAttribute("x", hw+v.px-(i>8?10:5));
					this.labls[i].setAttribute("y", hh+v.py+6);
				}
			}
			
			Controller.onEF = function()
			{
				var th = Controller.main;
				window.requestAnimFrame(Controller.onEF, document);
				var stable = th.g.Iterate();
				if(stable && !th.g.is3D) return;
				th.redraw();
			}
			
			Controller.embCode = function(e) 
			{
				var em = getEl("embed");
				if(em.style.display == "none") em.style.display = "block";
				else em.style.display = "none";
			}
			
			Controller.tinyURL = function(e) 
			{
				var nurl = encodeURIComponent(window.location.href);
				getEl("URLcont").src = "http://tinyurl.com/api-create.php?url="+nurl;
			}
			
			function getEl(s)
			{
				return document.getElementById(s);
			}
						
			function mouseX(e)
			{
				var cx;
				if(e.type == "touchstart" || e.type == "touchmove") cx = e.touches.item(0).clientX;
				else cx = e.clientX;
				return (cx + document.body.scrollLeft + document.documentElement.scrollLeft);
			}
			function mouseY(e)
			{	
				var cy;
				if(e.type == "touchstart" || e.type == "touchmove")	cy = e.touches.item(0).clientY;
				else cy = e.clientY;
				return (cy + document.body.scrollTop + document.documentElement.scrollTop); 
			}
			
			function rebuildURL()
			{
				var gr = getEl("inText").value;
				window.location = '#'+gr;
			}
			
			function sorter(a,b){return a.z - b.z}
			
			
			
			