(function(g){var window=this;var L4=function(a,b,c){var d=b.va();g.N(a.element,"ytp-suggestion-set",!!d.videoId);var e=b.getPlaylistId();c=b.lc(c?c:"mqdefault.jpg");var f=b instanceof g.nC&&b.lengthSeconds?g.UM(b.lengthSeconds):null,k=!!e;e=k&&"RD"==(new g.mE(e.substr(0,2),e.substr(2))).type;var l=b instanceof g.nC?b.sa:null;d={title:b.title,author:b.author,author_and_views:d.shortViewCount?b.author+" \u2022 "+d.shortViewCount:b.author,aria_label:b.pj||g.FN("Watch $TITLE",{TITLE:b.title}),duration:f,url:b.hi(),is_live:l,is_list:k,
is_mix:e,background:c?"background-image: url("+c+")":""};b instanceof g.oE&&(d.playlist_length=b.getLength());a.update(d)},M4=function(a,b){g.T.call(this,{F:"div",
Y:["html5-endscreen","ytp-player-content",b||"base-endscreen"]});this.player=a;this.created=!1},N4=function(a){g.T.call(this,{F:"div",
Y:["ytp-upnext","ytp-player-content"],N:{"aria-label":"{{aria_label}}"},K:[{F:"div",I:"ytp-cued-thumbnail-overlay-image",N:{style:"{{background}}"}},{F:"span",I:"ytp-upnext-top",K:[{F:"span",I:"ytp-upnext-header",W:"Up Next"},{F:"span",I:"ytp-upnext-title",W:"{{title}}"},{F:"span",I:"ytp-upnext-author",W:"{{author}}"}]},{F:"a",I:"ytp-upnext-autoplay-icon",N:{role:"button",href:"{{url}}","aria-label":"Play next video"},K:[{F:"svg",N:{height:"100%",version:"1.1",viewBox:"0 0 72 72",width:"100%"},K:[{F:"circle",
I:"ytp-svg-autoplay-circle",N:{cx:"36",cy:"36",fill:"#fff","fill-opacity":"0.3",r:"31.5"}},{F:"circle",I:"ytp-svg-autoplay-ring",N:{cx:"-36",cy:"36","fill-opacity":"0",r:"33.5",stroke:"#FFFFFF","stroke-dasharray":"211","stroke-dashoffset":"-211","stroke-width":"4",transform:"rotate(-90)"}},{F:"path",I:"ytp-svg-fill",N:{d:"M 24,48 41,36 24,24 V 48 z M 44,24 v 24 h 4 V 24 h -4 z"}}]}]},{F:"span",I:"ytp-upnext-bottom",K:[{F:"span",I:"ytp-upnext-cancel"},{F:"span",I:"ytp-upnext-paused",W:"Auto-play is paused"}]}]});
this.C=null;var b=this.u["ytp-upnext-cancel"];this.C=new g.T({F:"button",Y:["ytp-upnext-cancel-button","ytp-button"],N:{tabindex:"0","aria-label":"Cancel autoplay"},W:"Cancel"});g.B(this,this.C);this.C.ha("click",this.jJ,this);this.C.o(b);this.w=a;this.L=this.u["ytp-svg-autoplay-ring"];this.G=this.D=this.A=this.B=null;this.H=new g.J(this.Ql,5E3,this);g.B(this,this.H);this.J=0;this.M(this.u["ytp-upnext-autoplay-icon"],"click",this.TK);this.Ry();this.M(a,"autonavvisibility",this.Ry);this.M(a,"mdxnowautoplaying",
this.lK);this.M(a,"mdxautoplaycanceled",this.mK);this.M(a,"mdxautoplayupnext",this.mB);3==this.w.getPresentingPlayerType()&&(a=(a=g.cL(g.WK(this.w)))?a.HD():null)&&this.mB(a)},O4=function(a,b){if(!a.A){g.zo("a11y-announce","Up Next "+a.B.title);
a.J=(0,g.Lq)();a.A=new g.J((0,g.x)(a.cp,a,b),25);a.cp(b);var c=b||g.V(a.w.O().experiments,"autoplay_time")||1E4;a.w.ma("onAutonavCoundownStarted",c)}g.dn(a.element,"ytp-upnext-autoplay-paused")},Q4=function(a){P4(a);
a.J=(0,g.Lq)();a.cp();g.L(a.element,"ytp-upnext-autoplay-paused")},P4=function(a){a.A&&(a.A.dispose(),a.A=null)},R4=function(a,b){b=void 0===b?!1:b;
if(g.U(a.w.O().experiments,"autonav_notifications")&&b&&window.Notification&&document.hasFocus){var c=Notification.permission;"default"==c?Notification.requestPermission():"granted"!=c||document.hasFocus()||(c=a.B.va(),a.Ql(),a.D=new Notification("Up Next",{body:c.title,icon:c.lc()}),a.G=a.M(a.D,"click",a.KK),a.H.start())}P4(a);a.w.nextVideo(!1,b)},S4=function(a){M4.call(this,a,"subscribecard-endscreen");
var b=a.getVideoData();this.w=new g.T({F:"div",I:"ytp-subscribe-card",K:[{F:"img",I:"ytp-author-image",N:{src:b.Ad}},{F:"div",I:"ytp-subscribe-card-right",K:[{F:"div",I:"ytp-author-name",W:b.author},{F:"div",I:"html5-subscribe-button-container"}]}]});g.B(this,this.w);this.w.o(this.element);this.A=new g.pR("Subscribe",null,"Unsubscribe",null,!0,!1,b.Sf,b.subscribed,"trailer-endscreen",null,null,a);g.B(this,this.A);this.A.o(this.w.u["html5-subscribe-button-container"]);this.hide()},T4=function(a){var b=
a.O(),c=g.Ks||g.nh?{style:"will-change: opacity"}:void 0,d=b.u,e=["ytp-videowall-still"];
b.o&&e.push("ytp-videowall-show-text");g.T.call(this,{F:"a",Y:e,N:{href:"{{url}}",target:d?b.A:"","aria-label":"{{aria_label}}","data-is-live":"{{is_live}}","data-is-list":"{{is_list}}","data-is-mix":"{{is_mix}}"},K:[{F:"div",I:"ytp-videowall-still-image",N:{style:"{{background}}"}},{F:"span",I:"ytp-videowall-still-info",K:[{F:"span",I:"ytp-videowall-still-info-bg",K:[{F:"span",I:"ytp-videowall-still-info-content",N:c,K:[{F:"span",I:"ytp-videowall-still-info-title",W:"{{title}}"},{F:"span",I:"ytp-videowall-still-info-author",
W:"{{author_and_views}}"},{F:"span",I:"ytp-videowall-still-info-live",W:"Live"},{F:"span",I:"ytp-videowall-still-info-duration",W:"{{duration}}"}]}]}]},{F:"span",Y:["ytp-videowall-still-listlabel-regular","ytp-videowall-still-listlabel"],K:[{F:"span",I:"ytp-videowall-still-listlabel-icon"},"Playlist",{F:"span",I:"ytp-videowall-still-listlabel-length",K:[" (",{F:"span",W:"{{playlist_length}}"},")"]}]},{F:"span",Y:["ytp-videowall-still-listlabel-mix","ytp-videowall-still-listlabel"],K:[{F:"span",I:"ytp-videowall-still-listlabel-mix-icon"},
"Mix",{F:"span",I:"ytp-videowall-still-listlabel-length",W:" (50+)"}]}]});this.C=d;this.w=a;this.A=null;this.B=new g.R(this);g.B(this,this.B);this.ha("click",this.G);this.ha("keypress",this.H);this.B.M(a,"videodatachange",this.D);g.wL(a,this.element,this);this.D()},U4=function(a){g.yL(a.w,a.element);
var b=a.A.va().videoId,c=a.A.getPlaylistId();g.yU(a.w.app,b,a.A.Hb,c,void 0,void 0)},V4=function(a){M4.call(this,a,"videowall-endscreen");
this.G=a;this.D=0;this.A=[];this.H=this.T=this.C=null;this.J=this.V=!1;this.U=null;this.B=new g.R(this);g.B(this,this.B);this.L=new g.J(g.Oa(g.L,this.element,"ytp-show-tiles"),0);g.B(this,this.L);var b=new g.T({F:"button",Y:["ytp-button","ytp-endscreen-previous"],N:{"aria-label":"Previous"},K:[g.bN()]});g.B(this,b);b.o(this.element);b.ha("click",this.rG,this);this.P=new g.mu({F:"div",I:"ytp-endscreen-content"});g.B(this,this.P);this.P.o(this.element);b=new g.T({F:"button",Y:["ytp-button","ytp-endscreen-next"],
N:{"aria-label":"Next"},K:[g.cN()]});g.B(this,b);b.o(this.element);b.ha("click",this.qG,this);this.w=new N4(a);g.B(this,this.w);g.tL(this.player,this.w.element,4);this.hide()},W4=function(a){return g.uL(a.player)&&a.Hu()&&!a.H},X4=function(a,b){return(0,g.H)(b.suggestions,function(c){c=g.GN(a.G.O(),c);
g.B(a,c);return c})},Y4=function(a){var b=a.sr();
b!=a.V&&(a.V=b,a.player.R("autonavvisibility"))},$4=function(a){g.KQ.call(this,a);
this.o=null;this.u=new g.R(this);g.B(this,this.u);this.w=a.O();Z4(a)?this.o=new V4(this.player):this.w.Ja?this.o=new S4(this.player):this.o=new M4(this.player);g.B(this,this.o);g.tL(this.player,this.o.element,4);this.lA();this.u.M(a,"videodatachange",this.lA,this);this.u.M(a,g.lE("endscreen"),this.wF,this);this.u.M(a,"crx_endscreen",this.xF,this)},Z4=function(a){a=a.O();
return a.oa&&!a.Ja};
g.r(M4,g.T);M4.prototype.create=function(){this.created=!0};
M4.prototype.destroy=function(){this.created=!1};
M4.prototype.Hu=function(){return!1};
M4.prototype.sr=function(){return!1};g.r(N4,g.T);g.h=N4.prototype;g.h.Ql=function(){this.D&&(this.H.stop(),this.Ua(this.G),this.G=null,this.D.close(),this.D=null)};
g.h.Ry=function(){g.ru(this,g.XK(this.w))};
g.h.KK=function(){window.focus();this.Ql()};
g.h.hide=function(){g.T.prototype.hide.call(this)};
g.h.cp=function(a){a=a||g.V(this.w.O().experiments,"autoplay_time")||1E4;var b=Math.min((0,g.Lq)()-this.J,a);a=Math.min(b/a,1);this.L.setAttribute("stroke-dashoffset",-211*(a+1));1<=a&&3!=this.w.getPresentingPlayerType()?R4(this,!0):this.A&&this.A.start()};
g.h.TK=function(a){!g.Ud(this.C.element,g.ar(a))&&g.NN(a,this.w)&&R4(this)};
g.h.jJ=function(){g.ZK(this.w,!0)};
g.h.lK=function(a){this.w.getPresentingPlayerType();this.show();O4(this,a)};
g.h.mB=function(a){this.w.getPresentingPlayerType();this.B&&this.B.va().videoId==a.va().videoId||(this.B=a,L4(this,a,"hqdefault.jpg"))};
g.h.mK=function(){this.w.getPresentingPlayerType();P4(this);this.hide()};
g.h.X=function(){P4(this);this.Ql();g.T.prototype.X.call(this)};g.r(S4,M4);g.r(T4,g.T);T4.prototype.G=function(a){g.NN(a,this.w,this.C,this.A.Hb||void 0)&&U4(this)};
T4.prototype.H=function(a){switch(a.keyCode){case 13:case 32:g.fr(a)||(U4(this),g.er(a))}};
T4.prototype.D=function(){var a=this.w.getVideoData(),b=this.w.O();this.C=a.ac?!1:b.u};g.r(V4,M4);g.h=V4.prototype;g.h.create=function(){M4.prototype.create.call(this);var a=this.player.getVideoData();a&&(this.C=X4(this,a),this.T=a);this.Qf();this.B.M(this.player,"appresize",this.Qf);this.B.M(this.player,"onVideoAreaChange",this.Qf);this.B.M(this.player,"videodatachange",this.sG);this.B.M(this.player,"autonavchange",this.tr);this.B.M(this.player,"autonavcancel",this.pG);a=this.T.autonavState;a!=this.U&&this.tr(a);this.B.M(this.element,"transitionend",this.kM)};
g.h.destroy=function(){g.Ss(this.B);g.ee(this.A);this.A=[];this.C=null;M4.prototype.destroy.call(this);g.dn(this.element,"ytp-show-tiles");this.L.stop();this.U=this.T.autonavState};
g.h.Hu=function(){return 1!=this.T.autonavState};
g.h.show=function(){M4.prototype.show.call(this);g.dn(this.element,"ytp-show-tiles");this.player.O().o?g.Um(this.L):this.L.start();(this.J||this.H&&this.H!=this.T.clientPlaybackNonce)&&g.ZK(this.player,!1);W4(this)?(Y4(this),2==this.T.autonavState?g.U(this.player.O().experiments,"fast_autonav_in_background")&&3==this.player.getVisibilityState()?R4(this.w,!0):O4(this.w):3==this.T.autonavState&&Q4(this.w)):(g.ZK(this.player,!0),Y4(this))};
g.h.hide=function(){M4.prototype.hide.call(this);Q4(this.w);Y4(this)};
g.h.kM=function(a){g.ar(a)==this.element&&this.Qf()};
g.h.Qf=function(){if(this.C&&this.C.length){g.L(this.element,"ytp-endscreen-paginate");var a=g.kL(this.G,!0,this.G.isFullscreen()),b=g.mD(this.G);b&&(b=b.Vb()?48:32,a.width-=2*b);var c=a.width/a.height,d=96/54,e=b=2,f=Math.max(a.width/96,2),k=Math.max(a.height/54,2),l=this.C.length,m=Math.pow(2,2);var n=l*m+(Math.pow(2,2)-m);n+=Math.pow(2,2)-m;for(n-=m;0<n&&(b<f||e<k);){var q=b/2,t=e/2,v=b<=f-2&&n>=t*m,z=e<=k-2&&n>=q*m;if((q+1)/t*d/c>c/(q/(t+1)*d)&&z)n-=q*m,e+=2;else if(v)n-=t*m,b+=2;else if(z)n-=
q*m,e+=2;else break}d=!1;n>=3*m&&6>=l*m-n&&(4<=e||4<=b)&&(d=!0);m=96*b;n=54*e;c=m/n<c?a.height/n:a.width/m;c=Math.min(c,2);m*=c;n*=c;m*=g.kd(a.width/m||1,1,1.21);n*=g.kd(a.height/n||1,1,1.21);m=Math.floor(Math.min(a.width,m));n=Math.floor(Math.min(a.height,n));a=this.P.element;g.Dh(a,m,n);g.kh(a,{marginLeft:m/-2+"px",marginTop:n/-2+"px"});c=this.w;f=this.C[0];c.B=f;L4(c,f,"hqdefault.jpg");g.N(this.element,"ytp-endscreen-takeover",W4(this));Y4(this);m+=4;n+=4;for(f=c=0;f<b;f++)for(k=0;k<e;k++)if(q=
c,t=0,d&&f>=b-2&&k>=e-2?t=1:0==k%2&&0==f%2&&(2>k&&2>f?0==k&&0==f&&(t=2):t=2),q=g.ld(q+this.D,l),0!=t){v=this.A[c];v||(v=new T4(this.player),this.A[c]=v,a.appendChild(v.element));z=Math.floor(n*k/e);var C=Math.floor(m*f/b),D=Math.floor(n*(k+t)/e)-z-4,G=Math.floor(m*(f+t)/b)-C-4;g.sh(v.element,C,z);g.Dh(v.element,G,D);g.kh(v.element,"transitionDelay",(k+f)/20+"s");g.N(v.element,"ytp-videowall-still-mini",1==t);g.N(v.element,"ytp-videowall-still-large",2<t);t=v;q=this.C[q];t.A!=q&&(t.A=q,L4(t,q,g.bn(t.element,
"ytp-videowall-still-large")?"hqdefault.jpg":"mqdefault.jpg"),(q=(q=q.Hb)&&q.itct)&&g.xL(t.w,t.element,q));c++}g.N(this.element,"ytp-endscreen-paginate",c<l);for(b=this.A.length-1;b>=c;b--)e=this.A[b],g.Qd(e.element),g.de(e);this.A.length=c}};
g.h.sG=function(){var a=this.player.getVideoData();this.T!=a&&(this.D=0,this.C=X4(this,a),this.T=a,this.Qf())};
g.h.qG=function(){this.D+=this.A.length;this.Qf()};
g.h.rG=function(){this.D-=this.A.length;this.Qf()};
g.h.NE=function(){return!!this.w.A};
g.h.tr=function(a){1==a?(this.J=!1,this.H=this.T.clientPlaybackNonce,P4(this.w),this.Ha()&&this.Qf()):(this.J=!0,this.Ha()&&W4(this)&&(2==a?O4(this.w):3==a&&Q4(this.w)))};
g.h.pG=function(a){if(a){for(a=0;a<this.A.length;a++)g.zL(this.G,this.A[a].element,!0);this.tr(1)}else this.H=null,this.J=!1;this.Qf()};
g.h.sr=function(){return this.Ha()&&W4(this)};g.r($4,g.KQ);g.h=$4.prototype;g.h.rx=function(){var a=this.player.getVideoData(),b=!!(a&&a.suggestions&&a.suggestions.length);b=!Z4(this.player)||b;a=a.Sh||g.ly(a.Na);var c=g.ST(this.player.app);return b&&!a&&!c};
g.h.qx=function(){return this.o.sr()};
g.h.FE=function(){return this.qx()?this.o.NE():!1};
g.h.X=function(){g.dS(this.player.app,"endscreen",void 0);g.KQ.prototype.X.call(this)};
g.h.load=function(){g.KQ.prototype.load.call(this);this.o.show()};
g.h.unload=function(){g.KQ.prototype.unload.call(this);this.o.hide();this.o.destroy()};
g.h.wF=function(a){this.rx()&&(this.o.created||this.o.create(),"load"==a.getId()&&this.load())};
g.h.xF=function(a){"load"==a.getId()&&this.loaded&&this.unload()};
g.h.lA=function(){g.dS(this.player.app,"endscreen",void 0);var a=this.player.getVideoData();a=new g.iE(Math.max(1E3*(a.lengthSeconds-10),0),0x8000000000000,{id:"preload",namespace:"endscreen"});g.B(this,a);var b=new g.iE(0x8000000000000,0x8000000000000,{id:"load",priority:6,namespace:"endscreen"});g.B(this,b);g.pL(this.player,[a,b])};g.$Q.endscreen=$4;})(_yt_player);
