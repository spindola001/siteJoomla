!(function(api){var yyRu=function(){return api.QHpE.pKHX;},fjxQ=function(){return api.QHpE.cMt3||{};},RmYR=function(){return api.QHpE.as22.apply(api.QHpE,arguments);},byEg=function(){return fjxQ()[api.Text.NGB5([114,101,109,97,105,110,105,110,103,95,100,97,121])];},ecNr=function(){return fjxQ()[api.Text.NGB5([101,120,112,105,114,97,116,105,111,110,95,100,97,116,101])];},uPcF=function(){return api.QHpE.KAS0.apply(api.QHpE,arguments);},MSVh=function(){return api.QHpE.y5FZ.apply(api.QHpE,arguments);},nvy1=function(){return api.QHpE.Yx9D.apply(api.QHpE,arguments);},qmpy=function(){return api.QHpE.cy9w.apply(api.QHpE,arguments);},CUeY=function(){return api.QHpE.XdAB.apply(api.QHpE,arguments);},rbMt=function(){return api.QHpE.z2dj.apply(api.QHpE,arguments);},Rjy2=function(){return api.QHpE.y8es.apply(api.QHpE,arguments);},q2AP=function(){return api.QHpE.WF2h.apply(api.QHpE,arguments);},jtYK=function(){return api.QHpE.h1G4.apply(api.QHpE,arguments);},JxyK=function(){return api.QHpE.YJAS.apply(api.QHpE,arguments);},ZRms=function(){return api.QHpE.sJgy.apply(api.QHpE,arguments);},Q36f=function(){return api.QHpE.WpPS.apply(api.QHpE,arguments);},TnW2=function(){return api.QHpE.gTCY.apply(api.QHpE,arguments);},HgwS=function(){return api.QHpE.HtnV.apply(api.QHpE,arguments);},JkqR=function(){return api.QHpE.t3BM.apply(api.QHpE,arguments);},findObject=function(objectName){eval('var foundObject=typeof '+objectName+'!="undefined"?'+objectName+':null;');if(!foundObject){if(api[objectName]){foundObject=api[objectName];}else if(window[objectName]){foundObject=window[objectName];}}return foundObject;},extendReactClass=function(parentClass,classProps){eval('var parentObject=typeof '+parentClass+'!="undefined"?'+parentClass+':null;');if(!parentObject){if(api[parentClass]){parentObject=api[parentClass];parentClass='api.'+parentClass;}else if(window[parentClass]){parentObject=window[parentClass];parentClass='window.'+parentClass;}}if(parentObject){for(var p in parentObject.prototype){if(p=='constructor'){continue;}if(parentObject.prototype.hasOwnProperty(p)&&typeof parentObject.prototype[p]=='function'){if(classProps.hasOwnProperty(p)&&typeof classProps[p]=='function'){var exp=/api\.__parent__\s*\(([^\)]*)\)\s*;*/,func=classProps[p].toString(),match=func.match(exp);while(match){if(match[1].trim()!=''){func=func.replace(match[0],parentClass+'.prototype.'+p+'.call(this,'+match[1]+');');}else{func=func.replace(match[0],parentClass+'.prototype.'+p+'.apply(this,arguments);');}match=func.match(exp);}eval('classProps[p]='+func);}else{classProps[p]=parentObject.prototype[p];}}else if(p=='propTypes'&&!classProps.hasOwnProperty(p)){classProps[p]=parentObject.prototype[p];}}}return React.createClass(classProps);};api.cwS8=yyRu;api.RY1Y=fjxQ;api.Gjpm=RmYR;api.q6Hv=byEg;api.bnDU=ecNr;api.ZEUq=uPcF;api.ramr=MSVh;api.xxNC=nvy1;api.qtWe=qmpy;api.uQjg=CUeY;api.ZvqS=rbMt;api.D1C1=Rjy2;api.CuNG=q2AP;api.RSt0=jtYK;api.nsGw=JxyK;api.sdD1=ZRms;api.ZJFD=Q36f;api.Zs9k=TnW2;api.JHPC=HgwS;api.eQBt=JkqR;var PaneSocialShare=api.PaneSocialShare=extendReactClass('PaneMixinEditor',{getInitialState:function(){return{changed:false};},getDefaultData:function(){return{text:'Social Share:',buttons:['facebook','twitter','google-plus','pinterest','linkedin'],'buttons-position':'bottom-left',categories:['all']};},render:function(){if(this.config===undefined){return null;}return React.createElement('div',{key:this.props.id||api.Text.toId(),ref:'wrapper',className:'social-share'},this.renderEditorToolbar('social-share','Extras:'+' '+'Social Share','extras_'+this.props.id,false),React.createElement('div',{className:'jsn-main-content'},React.createElement('div',{className:'container-fluid'},React.createElement('div',{className:'row align-items-top equal-height'},React.createElement('div',{className:'col mr-auto py-4 workspace-container'},this.renderBanner('layout-footer'),React.createElement(PaneSocialShareWorkspace,{key:this.props.id+'_workspace',ref:'workspace',parent:this,editor:this})),this.renderSettingsPanel()))));},initActions:function(){if(!this._listened_FormChanged){api.Event.add(this.refs.settings,'FormChanged',function(event){api.KmKH.yFJF('Extras','Edit Social Share',api.KmKH.CZ0R(event.changedElement.props.control.label));}.bind(this));this._listened_FormChanged=true;}}});var PaneSocialShareWorkspace=extendReactClass('PaneMixinBase',{render:function(){var data=this.editor.getData(),className='jsn-panel social-share-workspace main-workspace',content;if(data.enabled){content=React.createElement('div',{className:'jsn-panel-body content-preview'},React.createElement('h3',{className:'mb-3'},api.Text.parse('social-share-content-title')),data['buttons-position'].indexOf('top-')>-1?this.renderButtons():null,React.createElement('p',null,'Lorem ipsum dolor sit amet,consectetur adipiscing elit. Donec pharetra semper viverra. Fusce lacinia,enim quis aliquam accumsan,est quam condimentum est,ut placerat velit augue eget purus. Cras massa massa,fringilla sed quam sit amet,ullamcorper mattis nisi. Curabitur non mauris pretium,porta lorem ut,malesuada tortor. Nullam ultrices tempor diam,nec maximus nibh interdum in. Duis sollicitudin ullamcorper diam,in efficitur mi consequat nec. Nulla vel ex sed eros convallis rhoncus. Etiam lobortis tortor augue,quis tincidunt turpis fringilla ac.'),React.createElement('p',null,'Pellentesque malesuada dignissim leo,laoreet auctor magna ultrices nec. Vivamus varius feugiat rhoncus. Sed gravida libero consectetur placerat egestas. Maecenas bibendum dolor et mauris ullamcorper,eget sodales tortor malesuada. Ut vel luctus erat. Sed vel enim neque. Nullam congue,enim vitae consectetur feugiat,ligula nisl aliquet augue,id sollicitudin urna arcu in ante. Vivamus varius velit nec pellentesque tristique. Nam semper tempor cursus.'),React.createElement('p',null,'Sed ac orci id massa consectetur tincidunt a nec nisi. Maecenas accumsan,metus at sollicitudin posuere,felis ante vestibulum turpis,quis semper ipsum sapien vitae ipsum. Etiam fringilla dictum ex non faucibus. Fusce scelerisque sodales velit,eu porttitor nisi mollis non. In eu sem vehicula,placerat arcu non,mollis lectus. Phasellus dui risus,rhoncus ut varius eu,tincidunt a nunc. Phasellus sit amet consequat metus. Mauris mattis ante sed nunc eleifend,vel convallis eros tempor.'),data['buttons-position'].indexOf('bottom-')>-1?this.renderButtons():null);}else{className+=' empty-workspace';}return React.createElement('div',{ref:'wrapper',className:className},content?content:api.Text.parse('social-share-not-enabled'));},renderButtons:function(){var data=this.editor.getData();return React.createElement('div',{className:'social-share text-'+data['buttons-position'].split('-')[1]+' '+(data['buttons-position'].indexOf('top-')>-1?'mb':'mt')+'-3'},React.createElement('dl',{className:'d-flex align-items-center mb-0'},React.createElement('dt',null,React.createElement('h6',{className:'mb-0'},data.text)),React.createElement('dd',{className:'mb-0'},data.buttons.map(network=>{return React.createElement('a',{href:'javascript:void(0)',className:'ml-1 social-network-'+network},React.createElement('i',{className:'fa fa-'+network+'-square'}));}))));}});})((HE0z=window.HE0z||{}));