mw.loader.implement("ext.bannerNotifications",function($){;},{},{"bannernotifications-general-ajax-failure":"The browser could not connect to FANDOM.  Try again later."});mw.loader.implement("ext.designSystem",function($){;},{},{"notifications-no-notifications-message":"No notifications yet.","notifications-mark-all-as-read":"Mark all as read","notifications-replied-by-multiple-users-with-title":"{mostRecentUser} and {number} other users <b>replied<\/b> to {postTitle}","notifications-replied-by-multiple-users-no-title":"{mostRecentUser} and {number} other users <b>replied<\/b> to a discussion you are following","notifications-replied-by-two-users-with-title":"{firstUser} and {secondUser} <b>replied<\/b> to {postTitle}","notifications-replied-by-two-users-no-title":"{firstUser} and {secondUser} <b>replied<\/b> to a discussion you are following","notifications-replied-by-with-title":"{user} <b>replied<\/b> to {postTitle}","notifications-replied-by-no-title":
"{user} <b>replied<\/b> to a discussion you are following","notifications-post-upvote-single-user-with-title":"1 user <b>upvoted<\/b> your discussion {postTitle}","notifications-post-upvote-single-user-no-title":"1 user <b>upvoted<\/b> your discussion","notifications-post-upvote-multiple-users-with-title":"{number} users <b>upvoted<\/b> your discussion {postTitle}","notifications-post-upvote-multiple-users-no-title":"{number} users  <b>upvoted<\/b> your discussion","notifications-reply-upvote-single-user-with-title":"1 user <b>upvoted<\/b> your reply to {postTitle}","notifications-reply-upvote-single-user-no-title":"1 user <b>upvoted<\/b> your reply","notifications-reply-upvote-multiple-users-with-title":"{number} users <b>upvoted<\/b> your reply to {postTitle}","notifications-reply-upvote-multiple-users-no-title":"{number} users <b>upvoted<\/b> your reply","notifications-notifications":"Notifications","notifications-post-at-mention":"{mentioner} <b>mentioned<\/b> you in {postTitle}.",
"notifications-reply-at-mention":"{mentioner} <b>mentioned<\/b> you in a reply to {postTitle}."});mw.loader.implement("ext.userLogin",function($){;},{},{"usersignup-error-password-length":"Oops, your password is too long. Please choose a password that's 50 characters or less.","userlogin-error-wrongpasswordempty":"Oops, please fill in the password field."});mw.loader.implement("ext.visualEditor.track",function($){(function(){var callbacks=$.Callbacks('memory'),queue=[];ve.track=function(topic,data){queue.push({topic:topic,timeStamp:ve.now(),data:data});callbacks.fire(queue);};ve.trackSubscribe=function(topic,callback){var seen=0;callbacks.add(function(queue){var event;for(;seen<queue.length;seen++){event=queue[seen];if(event.topic.indexOf(topic)===0){callback.call(event,event.topic,event.data);}}});};ve.trackSubscribeAll=function(callback){ve.trackSubscribe('',callback);};}());;},{},{});mw.loader.implement("ext.visualEditor.ve",function($){window.ve={instances:[]};ve.now=(function(){
var perf=window.performance,navStart=perf&&perf.timing&&perf.timing.navigationStart;return navStart&&typeof perf.now==='function'?function(){return navStart+perf.now();}:Date.now;}());;},{},{});mw.loader.implement("ext.visualEditor.wikia.viewPageTarget.init",function($){(function(){var conf,tabMessages,uri,viewUri,veEditUri,isViewPage,init,support,targetDeferred,plugins=[],trackerConfig={category:'editor-ve',trackingMethod:'analytics'},spinnerTimeoutId=null,vePreferred;function initSpinner(){var $spinner=$('<div>').addClass('ve-spinner visible').attr('data-type','loading'),$content=$('<div>').addClass('content'),$icon=$('<div>').addClass('loading'),$message=$('<p>').addClass('message').text(mw.message('wikia-visualeditor-loading').plain()),$fade=$('<div>').addClass('ve-spinner-fade');$content.append($icon).append($message);$spinner.append($content).appendTo($('body')).css('opacity',1).hide();$fade.appendTo('#WikiaArticle').hide();mw.hook('ve.activationComplete').add(function hide(){if(
spinnerTimeoutId){clearTimeout(spinnerTimeoutId);spinnerTimeoutId=null;}});}function showSpinner(){var $spinner=$('.ve-spinner[data-type="loading"]'),$message=$spinner.find('p.message'),$fade=$('.ve-spinner-fade');$message.hide();$spinner.fadeIn(400);$fade.show().css('opacity',0.75);spinnerTimeoutId=setTimeout(function(){if($spinner.is(':visible')){$message.slideDown(400);}},3000);}initSpinner();function getTarget(){var loadTargetDeferred;ve.track('wikia',{action:Wikia.Tracker.ACTIONS.IMPRESSION,label:'edit-page'});showSpinner();if(!targetDeferred){targetDeferred=$.Deferred();loadTargetDeferred=$.Deferred();mw.loader.using('ext.visualEditor.wikia.oasisViewPageTarget',loadTargetDeferred.resolve,loadTargetDeferred.reject);$.when($.getResources([window.wgResourceBasePath+'/resources/wikia/libraries/vignette/vignette.js',$.getSassCommonURL('/extensions/VisualEditor/wikia/VisualEditor-Oasis.scss')]),loadTargetDeferred).done(function(){var target=new ve.init.wikia.ViewPageTarget();target.
$element.insertAfter('#mw-content-text');ve.init.mw.ViewPageTarget.prototype.setupSectionEditLinks=init.setupSectionLinks;target.addPlugins(plugins);targetDeferred.resolve(target);});}return targetDeferred.promise();}conf=mw.config.get('wgVisualEditorConfig');tabMessages=conf.tabMessages;uri=new mw.Uri();viewUri=new mw.Uri(mw.util.getUrl(mw.config.get('wgRelevantPageName')));isViewPage=(mw.config.get('wgIsArticle')&&!('diff'in uri.query));veEditUri=(isViewPage?uri:viewUri).clone().extend({veaction:'edit'});vePreferred=!!mw.config.get('wgVisualEditorPreferred');support={es5:!!(Array.isArray&&Array.prototype.filter&&Array.prototype.indexOf&&Array.prototype.map&&Date.now&&Date.prototype.toJSON&&Object.create&&Object.keys&&String.prototype.trim&&window.JSON&&JSON.parse&&JSON.stringify&&Function.prototype.bind),contentEditable:'contentEditable'in document.createElement('div'),svg:!!(document.createElementNS&&document.createElementNS('http://www.w3.org/2000/svg','svg').createSVGRect)};init={
support:support,blacklist:conf.blacklist,addPlugin:function(plugin){plugins.push(plugin);},setupTabs:function(){$('#ca-ve-edit').click(init.onEditTabClick);},setupSectionLinks:function(){$('#mw-content-text').find('.editsection a').click(init.onEditSectionLinkClick);},onEditTabClick:function(e){if((e.which&&e.which!==1)||e.shiftKey||e.altKey||e.ctrlKey||e.metaKey){return;}init.showLoading();ve.track('mwedit.init',{type:'page',mechanism:'click'});if(history.pushState&&uri.query.veaction!=='edit'){mw.hook('ve.afterVEInit').fire(veEditUri);history.replaceState({tag:'visualeditor'},document.title,uri);history.pushState({tag:'visualeditor'},document.title,veEditUri);uri=veEditUri;}e.preventDefault();Wikia.Tracker.track(trackerConfig,{action:Wikia.Tracker.ACTIONS.CLICK,category:'article',label:'ve-edit'});if(window.veTrack){veTrack({action:'ve-edit-page-start',trigger:'onEditTabClick'});}getTarget().done(function(target){target.activate().done(function(){ve.track('mwedit.ready');}).always(
init.hideLoading);});},onEditSectionLinkClick:function(e){if((e.which&&e.which!==1)||e.shiftKey||e.altKey||e.ctrlKey||e.metaKey){return;}init.showLoading();ve.track('mwedit.init',{type:'section',mechanism:'click'});if(history.pushState&&uri.query.veaction!=='edit'){history.replaceState({tag:'visualeditor'},document.title,uri);history.pushState({tag:'visualeditor'},document.title,this.href);}e.preventDefault();Wikia.Tracker.track(trackerConfig,{action:Wikia.Tracker.ACTIONS.CLICK,category:'article',label:'ve-section-edit'});if(window.veTrack){veTrack({action:'ve-edit-page-start',trigger:'onEditSectionLinkClick'});}getTarget().done(function(target){target.saveEditSection($(e.target).closest('h1, h2, h3, h4, h5, h6').get(0));target.activate().done(function(){ve.track('mwedit.ready');}).always(init.hideLoading);});},showLoading:function(){if(!init.$loading){init.$loading=$('<div class="mw-viewPageTarget-loading"></div>');}$('#firstHeading').prepend(init.$loading);},hideLoading:function(){if
(init.$loading){init.$loading.detach();}}};support.visualEditor=support.es5&&support.contentEditable&&support.svg&&(('vewhitelist'in uri.query)||!$.client.test(init.blacklist,null,true));init.isAvailable=(support.visualEditor&&$.inArray(new mw.Title(mw.config.get('wgRelevantPageName')).getNamespaceId(),conf.namespaces)!==-1);init.isInValidNamespace=function(article){return $.inArray(new mw.Title(article).getNamespaceId(),conf.namespaces)!==-1;};init.canCreatePageUsingVE=function(){return support.visualEditor&&vePreferred;};mw.libs.ve=init;function setupRedlinks(){$(document).on('mouseover click','a[href*="action=edit"][href*="&redlink"]:not([href*="veaction=edit"]), '+'a[href*="action=edit"][href*="?redlink"]:not([href*="veaction=edit"])',function(){var $element=$(this),href=$element.attr('href'),articlePath=mw.config.get('wgArticlePath').replace('$1',''),redlinkArticle=new mw.Uri(href).path.replace(articlePath,'');if(init.isInValidNamespace(decodeURIComponent(redlinkArticle))){
$element.attr('href',href.replace('action=edit','veaction=edit'));}});}function removeVELink(){var $edit=$('#ca-edit'),$veEdit=$('#ca-ve-edit');$('html').addClass('ve-not-available');if(vePreferred&&$veEdit.length>0){$veEdit.attr('href',$edit.attr('href'));$edit.parent().remove();}else{$veEdit.parent().remove();}}if(init.isAvailable){$(function(){if(isViewPage&&uri.query.veaction==='edit'){var isSection=uri.query.vesection!==undefined;init.showLoading();ve.track('mwedit.init',{type:isSection?'section':'page',mechanism:'url'});if(window.veTrack){veTrack({action:'ve-edit-page-start',trigger:'activateOnPageLoad'});}getTarget().done(function(target){target.activate().done(function(){ve.track('mwedit.ready');}).always(init.hideLoading);});}if(isViewPage){init.setupTabs();if(vePreferred){init.setupSectionLinks();}}if(vePreferred){setupRedlinks();}});}else{removeVELink();}}());;},{},{"wikia-visualeditor-loading":"Loading...","wikia-visualeditor-anon-warning":
"You are not signed in. Some features will not be available to you. $1 or $2.","wikia-visualeditor-anon-log-in":"Sign in","wikia-visualeditor-anon-register":"Register","accesskey-ca-editsource":"e","accesskey-ca-ve-edit":"v","accesskey-save":"s","pipe-separator":" | ","tooltip-ca-createsource":"Create the source code of this page","tooltip-ca-editsource":"Edit the source code of this page","tooltip-ca-ve-edit":"Edit this page with VisualEditor","visualeditor-ca-editsource-section":"edit source"});mw.loader.implement("ext.wikia.AffiliateService",function($){function trackingPairsToObject(unit){var tracking={algo:'',method:'',version:'',recommendation_level:'',};if(unit.tracking&&unit.tracking.forEach&&typeof unit.tracking.forEach==='function'){unit.tracking.forEach(function(kv){tracking[kv.key]=kv.val;});}return tracking;}function linkToProxyLink(link,unit,wikiId,articleId,host){var tracking=trackingPairsToObject(unit);var category=unit.category;var path=[wikiId,articleId,category,
tracking.algo,tracking.method,tracking.version].join('/')
var potentialLink=host+path+"?r="+encodeURIComponent(link);if(potentialLink.length>2000){return link;}return potentialLink;}function shuffleArray(array){for(var i=array.length-1;i>0;i--){var j=Math.floor(Math.random()*(i+1));var temp=array[i];array[i]=array[j];array[j]=temp;}}function insertSpot(arr,val){for(var i=0;i<arr.length-1;i++){var arrVal=arr[i];var nextVal=arr[i+1];if(i===0&&arrVal>val){return-1;}if(arrVal<=val&&nextVal>val){return i;}}return arr.length-1;}function flattenServiceResponse(response){var targeting=[];response.forEach(function(campaign){var campaignName=campaign.campaign;campaign.categories.forEach(function(category){targeting.push({campaign:campaignName,category:category.name,score:category.score,tracking:category.tracking,recommendationLevel:category.recommendationLevel,})})});targeting.sort(function(a,b){return b.score-a.score;});var communityTargeting=[];var pageTargeting=[];targeting.forEach(function(t){if(!t.recommendationLevel||t.recommendationLevel===
'page'){pageTargeting.push(t);}if(!t.recommendationLevel||t.recommendationLevel==='community'){communityTargeting.push(t);}});return pageTargeting.length>0?pageTargeting:communityTargeting;}var HULU_COMMUNITIES=[321995,1644254,881799,200383,951918,8395,1637241,];require(['jquery','wikia.window','wikia.geo','wikia.log','ext.wikia.AffiliateService.units','ext.wikia.AffiliateService.templates','ext.wikia.AffiliateService.tracker',],function($,w,geo,log,units,templates,tracker){'use strict';var deferred=$.Deferred();var $w=$(w);var AffiliateService={$infoBox:undefined,isHuluCommunity:function(){return HULU_COMMUNITIES.indexOf(parseInt(w.wgCityId,10))!==-1;},getDebugTargeting:function(){if(typeof URLSearchParams==='function'){var urlParams=new URLSearchParams(w.location.search);if(urlParams.has('debugAffiliateServiceTargeting')){return urlParams.get('debugAffiliateServiceTargeting');}}return false;},canDisplayUnit:function(){if(AffiliateService.getDebugTargeting()!==false){return true;}if(w
.wgAffiliateEnabled&&!w.wgUserName){return true;}return false;},getStartHeight:function(){if(AffiliateService.$infoBox.length===0){return 0;}var infoBoxOffset=AffiliateService.$infoBox.offset();var infoBoxHeight=AffiliateService.$infoBox.height();return infoBoxOffset.top+infoBoxHeight;},fetchTargetingFromService:function(){var debugTargetting=AffiliateService.getDebugTargeting();if(debugTargetting!==false){console.log('debugTargetting',debugTargetting);const debugArray=debugTargetting.split(',');deferred.resolve([{campaign:debugArray[0],category:debugArray[1],score:1,tracking:[],}]);return deferred.promise();}if(AffiliateService.isHuluCommunity()){deferred.resolve([{campaign:'disneyplus',category:'hulu',score:1,tracking:[],}]);return deferred.promise();}var url=w.wgServicesExternalDomain+'knowledge-graph/affiliates/'+w.wgCityId+'/'+w.wgArticleId
$.ajax({url:url,}).done(function(result){if(!Array.isArray(result)||result.length===0){deferred.resolve([]);}deferred.resolve(flattenServiceResponse(result));}).fail(function(err){log('Failed to fetch affiliates data'+err,log.levels.error);deferred.resolve([]);});return deferred.promise();},getAvailableUnits:function(targeting){var currentCountry=geo.getCountryCode();var potentialUnits=units.slice();potentialUnits=$.grep(potentialUnits,function(unit){var c=unit.country;return!Array.isArray(c)||(c.length===0)||(c.indexOf(currentCountry)>-1);});var availableUnits=[];potentialUnits.forEach(function(unit){targeting.forEach(function(t){if(unit.campaign===t.campaign&&unit.category===t.category){availableUnits.push($.extend({},unit,{tracking:t.tracking,}));}});});return availableUnits;},addUnitToPage:function(){$.when(AffiliateService.fetchTargetingFromService(),).then(function(targeting){if(targeting.length>0){var availableUnits=AffiliateService.getAvailableUnits(targeting);if(availableUnits
.length>0){var unit=availableUnits[0];AffiliateService.renderUnitMarkup(unit);}else{console.log('No units available for targeting',targeting);}}else{console.log('No targeting available');}});},insertAtPointAndTrack:function($insertionPoint,unit){var extraTracking=unit.tracking?unit.tracking.slice():[];extraTracking.push({key:'instertedAtY',val:$insertionPoint?$insertionPoint.offset().top:-1,});var trackingOptions={campaignId:unit.campaign,categoryId:unit.category,extraTracking:extraTracking,};if($insertionPoint){var html=AffiliateService.getTemplate(unit);var $element=$insertionPoint.prepend(html);$element.find('.aff-unit__cta').on('mousedown',function(event){tracker.trackClick('only-item',trackingOptions);});var impressionFired=!1;$w.on('resize scroll',$.debounce(150,function(){if(!impressionFired){var elementTop=$element.offset().top;var elementBottom=elementTop+$element.outerHeight();var viewportTop=$w.scrollTop();var viewportBottom=viewportTop+$w.height();if(elementBottom>
viewportTop&&elementTop<viewportBottom){tracker.trackImpression(trackingOptions);impressionFired=!0;}}}));tracker.trackLoad(trackingOptions);}else{tracker.trackNoImpression(trackingOptions);}},renderUnitMarkup:function(unit){var startHeight=AffiliateService.getStartHeight();var $paragraphs=$('#mw-content-text > p');var $images=$('#mw-content-text > figure');var notAllowedYStart=[];var notAllowedYStop=[]
$images.each(function(index,element){var $image=$(element);var imageStart=$image.offset().top;notAllowedYStart.push(imageStart);notAllowedYStop.push(imageStart+$image.height());});function isValidSlot(yStart){if(notAllowedYStart.length===0){return true;}var index=insertSpot(notAllowedYStart,yStart);if(index===-1){return true;}var notAllowedYStartValue=notAllowedYStart[index];var notAllowedYStopValue=notAllowedYStop[index];if(notAllowedYStartValue===undefined){return true;}if(yStart<notAllowedYStartValue||yStart>notAllowedYStopValue){return true;}return false;}var $fallbackParagraph=null;var useFallbackAtY=20000;var $insertionPoint=undefined;$paragraphs.each(function(index,element){var $paragraph=$(element);var paragraphYStart=$paragraph.offset().top;var paragraphYEnd=$paragraph.height()+paragraphYStart;var paragraphYMiddle=paragraphYStart+$paragraph.height()/2;if(paragraphYStart>startHeight&&isValidSlot(paragraphYStart)&&isValidSlot(paragraphYEnd)&&isValidSlot(paragraphYMiddle)){if(
$fallbackParagraph===null){$fallbackParagraph=$paragraph;}if($paragraph.prev().is('p')){$insertionPoint=$paragraph;return false;}}if($fallbackParagraph&&paragraphYStart>useFallbackAtY){log('Affiliate Unit inserted using fallback slot');$insertionPoint=$fallbackParagraph;return false;}});AffiliateService.insertAtPointAndTrack($insertionPoint,unit);},getTemplate:function(unit){var updatedLink=unit.link;var watchShowEnabledDate=w.wgWatchShowEnabledDate||!1;var isWatchShowEnabled=watchShowEnabledDate&&(Date.parse(watchShowEnabledDate)<Date.now());if(unit.campaign==='ddb'){var beaconId=$.cookies.get('wikia_beacon_id');var sessionId=$.cookies.get('wikia_session_id');var userId=w.wgUserId||'null';var utmTerm=userId==='null'?sessionId+'_'+userId:sessionId;var queryParams={'utm_medium':'affiliate_link','utm_source':'fandom','utm_campaign':unit.category,'utm_term':utmTerm,'utm_content':w.wgCityId+'_'+w.wgArticleId+'_'+userId+'_mediawiki_content','fandom_session_id':sessionId,'fandom_user_id':
userId,'fandom_campaign_id':unit.category,'fandom_community_id':w.wgCityId,'fandom_page_id':w.wgArticleId,'fandom_beacon_id':beaconId,'fandom_slot_id':'mediawiki_content',};updatedLink=unit.link+'?'+$.param(queryParams);}return templates.unit({image:unit.image,heading:unit.heading,buttonText:unit.subheading,link:linkToProxyLink(updatedLink,unit,w.wgCityId,w.wgArticleId,w.wgServicesExternalDomain+'affiliate/redirect/'),logoLight:unit.logo?unit.logo.light:null,logoDark:unit.logo?unit.logo.dark:null,showDisclaimer:!isWatchShowEnabled,disclaimerMessage:w.disclaimerMessage,campaign:unit.campaign,category:unit.category});},init:function(){if($('.portable-infobox').length>0){AffiliateService.$infoBox=$('.portable-infobox').first();}else if($('.infobox').length>0){AffiliateService.$infoBox=$('.infobox').first();}if(!AffiliateService.canDisplayUnit()){return;}AffiliateService.addUnitToPage();},};$(AffiliateService.init);});define('ext.wikia.AffiliateService.units',[],function(){var units=[{
campaign:'hbomax',category:'hbomax',name:'hbomax-unit',country:['US'],heading:'Where HBO Meets So Much More',subheading:'START YOUR FREE TRIAL',link:'https://www.hbomax.com/',image:'https://static.wikia.nocookie.net/05a5bbb9-7662-416e-99c7-6e6700af9aa3',extraDisclaimer:"Free trial for new customers only. Restrictions Apply."},{campaign:'disneyplus',category:'starwars',name:'starwars-unit',country:['US','CA','NL','AU','NZ'],heading:'The Star Wars story lives forever',subheading:'Watch Now On Disney+',link:'https://disneyplus.bn5x.net/dANAy',image:'https://static.wikia.nocookie.net/f4fdc410-9a4c-4925-b39f-75f91f7a0e2d',logo:{light:'https://static.wikia.nocookie.net/274624f0-64b8-42b8-8f5d-1b0f0529c3bb',dark:'https://static.wikia.nocookie.net/1d8d22a4-207e-47eb-991e-2d1a1c37f1cf',},},{campaign:'disneyplus',category:'disney',name:'disney-unit',country:['US','CA','NL','AU','NZ'],heading:'Moana, a heroine kids and adults alike will admire and cheer for',subheading:'Watch Now On Disney+',link
:'https://disneyplus.bn5x.net/23b9G',image:'https://static.wikia.nocookie.net/0da1d7a3-3a55-4370-8db0-a3304e53dcd6',logo:{light:'https://static.wikia.nocookie.net/274624f0-64b8-42b8-8f5d-1b0f0529c3bb',dark:'https://static.wikia.nocookie.net/1d8d22a4-207e-47eb-991e-2d1a1c37f1cf',},},{campaign:'disneyplus',category:'marvel',name:'marvel-unit',country:['US','CA','NL','AU','NZ'],heading:'How to stream your favorites and more on Disney+',subheading:'Get Started',link:'https://www.fandom.com/articles/how-to-sign-up-disney-plus',image:'https://static.wikia.nocookie.net/a20f7e88-cdd0-4629-b888-5b30bc2156b2',logo:{light:'https://static.wikia.nocookie.net/274624f0-64b8-42b8-8f5d-1b0f0529c3bb',dark:'https://static.wikia.nocookie.net/1d8d22a4-207e-47eb-991e-2d1a1c37f1cf',},},{campaign:'disneyplus',category:'mandalorian',name:'mandalorian-unit',country:['US','CA','NL','AU','NZ'],heading:'A thrilling new adventure on the galactic frontier',subheading:'Watch Now On Disney+',link:
'https://disneyplus.bn5x.net/dANAy',image:'https://static.wikia.nocookie.net/971b7d47-c4ca-4fb0-9ead-0db73eb6ce9c',logo:{light:'https://static.wikia.nocookie.net/274624f0-64b8-42b8-8f5d-1b0f0529c3bb',dark:'https://static.wikia.nocookie.net/1d8d22a4-207e-47eb-991e-2d1a1c37f1cf',},},{campaign:'disneyplus',category:'pixar',name:'pixar-unit',country:['US','CA','NL','AU','NZ'],heading:'How to stream your favorites and more on Disney+',subheading:'Get Started',link:'https://www.fandom.com/articles/how-to-sign-up-disney-plus',image:'https://static.wikia.nocookie.net/a20f7e88-cdd0-4629-b888-5b30bc2156b2',logo:{light:'https://static.wikia.nocookie.net/274624f0-64b8-42b8-8f5d-1b0f0529c3bb',dark:'https://static.wikia.nocookie.net/1d8d22a4-207e-47eb-991e-2d1a1c37f1cf',},},{campaign:'disneyplus',category:'simpsons',name:'simpsons-unit',country:['US','CA','NL','AU','NZ'],heading:'Don\'t have a cow man, relive the Simpsons',subheading:'Watch Now On Disney+',link:'https://disneyplus.bn5x.net/23b9G',
image:'https://static.wikia.nocookie.net/803e11a2-7213-48bc-9bfe-828111661cec',logo:{light:'https://static.wikia.nocookie.net/274624f0-64b8-42b8-8f5d-1b0f0529c3bb',dark:'https://static.wikia.nocookie.net/1d8d22a4-207e-47eb-991e-2d1a1c37f1cf',},},{campaign:'disneyplus',category:'hulu',name:'hulu-unit',country:['US','CA','NL','AU','NZ'],heading:'Upgrade Your Hulu Bundle with Disney+',subheading:'Upgrade Now',link:'https://fandom.com/articles/disney-plus-bundle-how-to',image:'https://static.wikia.nocookie.net/a20f7e88-cdd0-4629-b888-5b30bc2156b2',logo:{light:'https://static.wikia.nocookie.net/274624f0-64b8-42b8-8f5d-1b0f0529c3bb',dark:'https://static.wikia.nocookie.net/1d8d22a4-207e-47eb-991e-2d1a1c37f1cf',},},{campaign:'ddb',category:'ddb',name:'ddb-unit',heading:'The Official Digital Toolset for Dungeons & Dragons',subheading:'Visit D&D Beyond',link:'https://www.dndbeyond.com/intro',image:'https://static.wikia.nocookie.net/e95c2f7f-3240-4a70-9f24-1c0ce6b26072',logo:{light:
'https://static.wikia.nocookie.net/4d047095-f895-4efa-a644-4ed093db5dd9',dark:'https://static.wikia.nocookie.net/328f8cb8-ee40-4764-9f26-35402d3c62f0',},},{campaign:'disneyplus',category:'disney',name:'disney-unit',country:['ES'],heading:'Miras tus favoritos de Disney en un solo lugar.',subheading:'Prueba 7 dias gratis',link:'https://disneyplus.bn5x.net/c/1947570/772705/9358?subId1=generic-es&subId2=launch&subId3=ad-fandom&sharedid=desktop',image:'https://static.wikia.nocookie.net/7c17463b-98da-4119-a558-a9a6ab84b7bf/',},{campaign:'disneyplus',category:'disney',name:'disney-unit',country:['IE'],heading:'Watch Your Disney Favorites, All In One Place',subheading:'Start your Free Trial',link:'https://disneyplus.bn5x.net/c/1947570/772702/9358?subId1=generic-ie&subId2=launch&subId3=ad-fandom&sharedid=desktop',image:'https://static.wikia.nocookie.net/7c17463b-98da-4119-a558-a9a6ab84b7bf/',},{campaign:'disneyplus',category:'disney',name:'disney-unit',country:['IT'],heading:
'Guarda i tuoi preferiti della Disney, tutti in un solo posto.',subheading:'Inizia la prova gratuita',link:'https://disneyplus.bn5x.net/c/1947570/772708/9358?subId1=generic-it&subId2=launch&subId3=ad-fandom&sharedid=desktop',image:'https://static.wikia.nocookie.net/df3afc30-0f94-470d-85ce-e1319062c993/',},{campaign:'disneyplus',category:'disney',name:'disney-unit',country:['FR'],heading:'Regardez tous vos Disney favoris, au même endroit.',subheading:'Jours d’Essai Gratuits',link:'https://disneyplus.bn5x.net/c/1947570/772639/9358?subId1=generic-fr&subId2=launch&subId3=ad-fandom&sharedid=desktop',image:'https://static.wikia.nocookie.net/7c17463b-98da-4119-a558-a9a6ab84b7bf/',},{campaign:'disneyplus',category:'disney',name:'disney-unit',country:['GB'],heading:'Watch Your Disney Favorites, All In One Place',subheading:'Start your Free Trial',link:'https://disneyplus.bn5x.net/c/1947570/772699/9358?subId1=generic-uk&subId2=launch&subId3=ad-fandom&sharedid=desktop',image:
'https://static.wikia.nocookie.net/7c17463b-98da-4119-a558-a9a6ab84b7bf/',},{campaign:'disneyplus',category:'disney',name:'disney-unit',country:['DE','AT','CH'],heading:'Schaue deine liebsten Disney-Filme und -Serien, alle am selben Ort.',subheading:'Jetzt Kostenlos Testen',link:'https://disneyplus.bn5x.net/c/1947570/772722/9358?subId1=generic-de&subId2=launch&subId3=ad-fandom&sharedid=desktop',image:'https://static.wikia.nocookie.net/df3afc30-0f94-470d-85ce-e1319062c993/',},];return units;});define('ext.wikia.AffiliateService.templates',[],function(){'use strict';function unit(options){var logos='';var disclaimer='';if(options.logoLight){logos='<img class="aff-unit__logo light" src="'+options.logoLight+'">'+'<img class="aff-unit__logo dark" src="'+options.logoDark+'">';}if(options.showDisclaimer){disclaimer='<p class="aff-unit__disclaimer-message">'+options.disclaimerMessage;if(options.extraDisclaimer){disclaimer+=' '+options.extraDisclaimer}disclaimer+='</p>';}return'<div class="aff-unit__wrapper" data-campaign="'
+options.campaign+'" data-category="'+options.category+'">'+'<a class="aff-unit__link" href="'+options.link+'" target="_blank">'+'<div class="aff-unit__image-wrapper" style="background-image: url('+options.image+')"></div>'+'<div class="aff-unit__info">'+'<p class="aff-unit__header">'+options.heading+'</p>'+'<button class="wds-button wds-is-secondary aff-unit__cta">'+options.buttonText+'</button>'+logos+'</div>'+'</a>'+'</div>'+disclaimer;}return{unit:unit,};});define('ext.wikia.AffiliateService.tracker',['jquery','wikia.tracker','wikia.window',],function($,tracker,win){'use strict';var defaultOptions={campaignId:'',categoryId:'',extraTracking:[],}
function track(action,label,options){var currentOptions=$.extend({},defaultOptions,options||{});var extraTrackingOptions={};options.extraTracking.forEach((kv)=>{extraTrackingOptions['affiliation_'+kv.key]=kv.val;});var computedTracking=$.extend({action:action,category:'affiliate_incontent_recommend',label:label,trackingMethod:'analytics',campaign_id:options.campaignId,category_id:options.categoryId,},extraTrackingOptions);win.guaSetCustomDimension(21,(win.wgArticleId||'').toString());win.guaSetCustomDimension(31,(options.campaignId||'').toString());win.guaSetCustomDimension(32,(options.categoryId||'').toString());win.guaSetCustomDimension(33,Object.keys(extraTrackingOptions).map(function(k){return k+'='+extraTrackingOptions[k];}).join(','));console.debug('Affiliate Tracking',computedTracking);tracker.track(computedTracking);}function trackClick(label,options){track(tracker.ACTIONS.CLICK,label,options);}function trackImpression(options){track(tracker.ACTIONS.IMPRESSION,'affiliate_shown'
,options);}function trackLoad(options){track(tracker.ACTIONS.IMPRESSION,'affiliate_loaded',options);}function trackNoImpression(options){track(tracker.ACTIONS.NO_IMPRESSION,'affiliate_not_shown',options);}return{trackImpression:trackImpression,trackLoad:trackLoad,trackNoImpression:trackNoImpression,trackClick:trackClick,};});;},{"all":
".aff-unit__wrapper{background-color:rgba(255,255,255,0.25);border:solid 1px rgba(51,51,51,0.5);border-radius:3px;margin:30px 18px}.aff-unit__link{display:flex}.aff-unit__link:hover{text-decoration:none}.aff-unit__image-wrapper{background-repeat:no-repeat;background-size:cover;flex:1;position:relative}.aff-unit__image-wrapper::before{border-left:72px solid black;content:\'\';height:100%;position:absolute;right:-50px;top:0;transform:skewX(-20deg);width:0}.aff-unit__image-wrapper::after{border-left:72px solid rgba(255,255,255,0.25);content:\'\';height:100%;position:absolute;right:-50px;top:0;transform:skewX(-20deg);width:0}.aff-unit__info{color:#D5D4D4;flex:2;padding:12px 18px;position:relative}.aff-unit__cta.wds-button.wds-is-secondary{border-color:#3a3a3a;color:#3a3a3a;border-color:#D5D4D4;color:#D5D4D4}.aff-unit__cta.wds-button.wds-is-secondary:hover{background:transparent;border-color:#878787;color:#878787;border-color:#898787;color:#898787}.WikiaArticle p .aff-unit__disclaimer-message{color:#D5D4D4;font-size:10px;font-style:italic;letter-spacing:.02px;line-height:1.5;margin:-12px 18px 18px;position:relative}.WikiaArticle p .aff-unit__header{font-size:16px;font-weight:600;line-height:normal;margin:0 0 14px}.aff-unit__logo{bottom:12px;height:34px !important;position:absolute;right:18px}.aff-unit__logo.light{display:none}.aff-unit__logo.dark{display:none;display:block}\n\n/* cache key: castlevania:resourceloader:filter:minify-css:7:820b0c4bb4e5ce3f22b8dc7d1c1bf796 */"
},{});mw.loader.implement("ext.wikia.GoogleTagManager",function($){;},{},{});mw.loader.implement("ext.wikia.TimeAgoMessaging",function($){$('.timeago').timeago();;},{},{"timeago-year":"{{PLURAL:$1|a year|$1 years}} ago","timeago-month":"{{PLURAL:$1|a month|$1 months}} ago","timeago-day":"{{PLURAL:$1|a day|$1 days}} ago","timeago-hour":"{{PLURAL:$1|an hour|$1 hours}} ago","timeago-minute":"{{PLURAL:$1|a minute|$1 minutes}} ago","timeago-second":"a minute ago","timeago-day-from-now":"{{PLURAL:$1|a day|$1 days}} from now","timeago-hour-from-now":"{{PLURAL:$1|an hour|$1 hours}} from now","timeago-minute-from-now":"{{PLURAL:$1|a minute|$1 minutes}} from now","timeago-month-from-now":"{{PLURAL:$1|a month|$1 months}} from now","timeago-second-from-now":"a minute from now"});mw.loader.implement("mediawiki.language.data",function($){mw.language.setData("en",{"digitTransformTable":null,"separatorTransformTable":null,"grammarForms":[],"pluralRules":null,"digitGroupingPattern":null});;},{},{});

/* cache key: castlevania:resourceloader:filter:minify-js:7:7e50588ece664c783e7caf2db9493bce */