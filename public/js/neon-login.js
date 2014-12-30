var neonLogin=neonLogin||{};;(function($,window,undefined){"use strict";$(document).ready(function(){neonLogin.$container=$("#form_login");neonLogin.$container.validate({rules:{username:{required:true},password:{required:true},},highlight:function(element){$(element).closest('.input-group').addClass('validate-has-error');},unhighlight:function(element){$(element).closest('.input-group').removeClass('validate-has-error');},submitHandler:function(ev){$(".login-page").addClass('logging-in');setTimeout(function(){var random_pct=25+Math.round(Math.random()*30);neonLogin.setPercentage(random_pct,function(){setTimeout(function(){neonLogin.setPercentage(100,function(){setTimeout("window.location.href = 'login'",600);},2);},820);});},650);}});var is_lockscreen=$(".login-page").hasClass('is-lockscreen');if(is_lockscreen){neonLogin.$container=$("#form_lockscreen");neonLogin.$ls_thumb=neonLogin.$container.find('.lockscreen-thumb');neonLogin.$container.validate({rules:{password:{required:true},},highlight:function(element){$(element).closest('.input-group').addClass('validate-has-error');},unhighlight:function(element){$(element).closest('.input-group').removeClass('validate-has-error');},submitHandler:function(ev){$(".login-page").addClass('logging-in-lockscreen');setTimeout(function(){var random_pct=25+Math.round(Math.random()*30);neonLogin.setPercentage(random_pct,function(){setTimeout(function(){neonLogin.setPercentage(100,function(){setTimeout("window.location.href = 'login'",600);},2);},820);});},650);}});}neonLogin.$body=$(".login-page");neonLogin.$login_progressbar_indicator=$(".login-progressbar-indicator h3");neonLogin.$login_progressbar=neonLogin.$body.find(".login-progressbar div");neonLogin.$login_progressbar_indicator.html('0%');if(neonLogin.$body.hasClass('login-form-fall')){var focus_set=false;setTimeout(function(){neonLogin.$body.addClass('login-form-fall-init')setTimeout(function(){if(!focus_set){neonLogin.$container.find('input:first').focus();focus_set=true;}},550);},0);}else{neonLogin.$container.find('input:first').focus();}neonLogin.$container.find('.form-control').each(function(i,el){var $this=$(el),$group=$this.closest('.input-group');$this.prev('.input-group-addon').click(function(){$this.focus();});$this.on({focus:function(){$group.addClass('focused');},blur:function(){$group.removeClass('focused');}});});$.extend(neonLogin,{setPercentage:function(pct,callback){pct=parseInt(pct/100*100,10)+'%';if(is_lockscreen){neonLogin.$lockscreen_progress_indicator.html(pct);var o={pct:currentProgress};TweenMax.to(o,.7,{pct:parseInt(pct,10),roundProps:["pct"],ease:Sine.easeOut,onUpdate:function(){neonLogin.$lockscreen_progress_indicator.html(o.pct+'%');drawProgress(parseInt(o.pct,10)/100);},onComplete:callback});return;}neonLogin.$login_progressbar_indicator.html(pct);neonLogin.$login_progressbar.width(pct);var o={pct:parseInt(neonLogin.$login_progressbar.width()/neonLogin.$login_progressbar.parent().width()*100,10)};TweenMax.to(o,.7,{pct:parseInt(pct,10),roundProps:["pct"],ease:Sine.easeOut,onUpdate:function(){neonLogin.$login_progressbar_indicator.html(o.pct+'%');},onComplete:callback});}});if(is_lockscreen){neonLogin.$lockscreen_progress_canvas=$('<canvas></canvas>');neonLogin.$lockscreen_progress_indicator=neonLogin.$container.find('.lockscreen-progress-indicator');neonLogin.$lockscreen_progress_canvas.appendTo(neonLogin.$ls_thumb);var thumb_size=neonLogin.$ls_thumb.width();neonLogin.$lockscreen_progress_canvas.attr({width:thumb_size,height:thumb_size});neonLogin.lockscreen_progress_canvas=neonLogin.$lockscreen_progress_canvas.get(0);var bg=neonLogin.lockscreen_progress_canvas,ctx=ctx=bg.getContext('2d'),imd=null,circ=Math.PI*2,quart=Math.PI/2,currentProgress=0;ctx.beginPath();ctx.strokeStyle='#eb7067';ctx.lineCap='square';ctx.closePath();ctx.fill();ctx.lineWidth=3.0;imd=ctx.getImageData(0,0,thumb_size,thumb_size);var drawProgress=function(current){ctx.putImageData(imd,0,0);ctx.beginPath();ctx.arc(thumb_size/2,thumb_size/2,70,-(quart),((circ)*current)-quart,false);ctx.stroke();currentProgress=current*100;}drawProgress(0/100);neonLogin.$lockscreen_progress_indicator.html('0%');}});})(jQuery,window);