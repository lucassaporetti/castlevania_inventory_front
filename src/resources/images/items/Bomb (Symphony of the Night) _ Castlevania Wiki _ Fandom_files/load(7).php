var isCompatible=function(){if(navigator.appVersion.indexOf('MSIE')!==-1&&parseFloat(navigator.appVersion.split('MSIE')[1])<6){return false;}return true;};var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":{"loadScript":"/load.php","apiScript":"/api.php"},"common":{"loadScript":"https://slot1-images.wikia.nocookie.net/__load/-/","apiScript":"/api.php"}});mw.loader.register([["site",1584639000,[],"site"],["noscript",1202225400,[],"noscript"],["startup",1593288000,[],"startup"],["user",1202225400,[],"user"],["user.groups",1202225400,[],"user"],["user.options",1593288000,[],"private"],["user.cssprefs",1593288000,["mediawiki.user"],"private"],["user.tokens",1202225400,[],"private"],["filepage",1202225400],["mediawiki.language.data",1542137400,["mediawiki.language.init"]],["skins.monobook",1593179100,[],null,"common"],["jquery",1593179100,[],null,"common"],["jquery.appear",1593179100,[],null,"common"],["jquery.arrowSteps",1593179100,[],null,"common"],[
"jquery.async",1593179100,[],null,"common"],["jquery.autoEllipsis",1593179100,["jquery.highlightText"],null,"common"],["jquery.byteLength",1593179100,[],null,"common"],["jquery.byteLimit",1593179100,["jquery.byteLength"],null,"common"],["jquery.checkboxShiftClick",1593179100,[],null,"common"],["jquery.client",1593179100,[],null,"common"],["jquery.collapsibleTabs",1593179100,[],null,"common"],["jquery.color",1593179100,["jquery.colorUtil"],null,"common"],["jquery.colorUtil",1593179100,[],null,"common"],["jquery.cookie",1593179100,[],null,"common"],["jquery.delayedBind",1593179100,[],null,"common"],["jquery.expandableField",1593179100,["jquery.delayedBind"],null,"common"],["jquery.farbtastic",1593179100,["jquery.colorUtil"],null,"common"],["jquery.footHovzer",1593179100,[],null,"common"],["jquery.form",1593179100,[],null,"common"],["jquery.getAttrs",1593179100,[],null,"common"],["jquery.highlightText",1593179100,[],null,"common"],["jquery.hoverIntent",1593179100,[],null,"common"],[
"jquery.json",1593179100,[],null,"common"],["jquery.localize",1593179100,[],null,"common"],["jquery.makeCollapsible",1593179100,[],null,"common"],["jquery.messageBox",1593179100,[],null,"common"],["jquery.mockjax",1593179100,[],null,"common"],["jquery.mw-jump",1593179100,[],null,"common"],["jquery.mwExtension",1593179100,[],null,"common"],["jquery.placeholder",1593179100,[],null,"common"],["jquery.qunit",1593179100,[],null,"common"],["jquery.qunit.completenessTest",1593179100,["jquery.qunit"],null,"common"],["jquery.spinner",1593179100,[],null,"common"],["jquery.suggestions",1593179100,["jquery.autoEllipsis"],null,"common"],["jquery.tabIndex",1593179100,[],null,"common"],["jquery.tablesorter",1593179100,["jquery.mwExtension"],null,"common"],["jquery.textSelection",1593179100,[],null,"common"],["jquery.validate",1593179100,[],null,"common"],["jquery.xmldom",1593179100,[],null,"common"],["jquery.tipsy",1593179100,[],null,"common"],["jquery.ui.core",1593179100,["jquery"],"jquery.ui",
"common"],["jquery.ui.widget",1593179100,[],"jquery.ui","common"],["jquery.ui.mouse",1593179100,["jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.position",1593179100,[],"jquery.ui","common"],["jquery.ui.draggable",1593179100,["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.droppable",1593179100,["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget","jquery.ui.draggable"],"jquery.ui","common"],["jquery.ui.resizable",1593179100,["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui","common"],["jquery.ui.selectable",1593179100,["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui","common"],["jquery.ui.sortable",1593179100,["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui","common"],["jquery.ui.accordion",1593179100,["jquery.ui.core","jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.autocomplete",1593179100,["jquery.ui.core","jquery.ui.widget","jquery.ui.position"],"jquery.ui","common"],[
"jquery.ui.button",1593179100,["jquery.ui.core","jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.datepicker",1593179100,["jquery.ui.core"],"jquery.ui","common"],["jquery.ui.dialog",1593179100,["jquery.ui.core","jquery.ui.widget","jquery.ui.button","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable"],"jquery.ui","common"],["jquery.ui.progressbar",1593179100,["jquery.ui.core","jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.slider",1593179100,["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui","common"],["jquery.ui.tabs",1593179100,["jquery.ui.core","jquery.ui.widget"],"jquery.ui","common"],["jquery.effects.core",1593179100,["jquery"],"jquery.ui","common"],["jquery.effects.blind",1593179100,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.bounce",1593179100,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.clip",1593179100,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.drop",1593179100,[
"jquery.effects.core"],"jquery.ui","common"],["jquery.effects.explode",1593179100,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.fade",1593179100,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.fold",1593179100,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.highlight",1593179100,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.pulsate",1593179100,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.scale",1593179100,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.shake",1593179100,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.slide",1593179100,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.transfer",1593179100,["jquery.effects.core"],"jquery.ui","common"],["mediawiki",1593179100,[],null,"common"],["mediawiki.api",1593179100,["mediawiki.util"],null,"common"],["mediawiki.api.category",1593179100,["mediawiki.api","mediawiki.Title"],null,"common"],["mediawiki.api.edit",
1593179100,["mediawiki.api","mediawiki.Title"],null,"common"],["mediawiki.api.parse",1593179100,["mediawiki.api"],null,"common"],["mediawiki.api.titleblacklist",1593179100,["mediawiki.api","mediawiki.Title"],null,"common"],["mediawiki.api.watch",1593179100,["mediawiki.api","mediawiki.user"],null,"common"],["mediawiki.debug",1593179100,["jquery.footHovzer"],null,"common"],["mediawiki.debug.init",1593179100,["mediawiki.debug"],null,"common"],["mediawiki.feedback",1593179100,["mediawiki.api.edit","mediawiki.Title","mediawiki.jqueryMsg","jquery.ui.dialog"],null,"common"],["mediawiki.htmlform",1593179100,[],null,"common"],["mediawiki.Title",1593179100,["jquery.byteLength","mediawiki.util"],null,"common"],["mediawiki.Uri",1593179100,[],null,"common"],["mediawiki.user",1593179100,["jquery.cookie"],null,"common"],["mediawiki.util",1593179100,["jquery.client","jquery.cookie","jquery.messageBox","jquery.mwExtension"],null,"common"],["mediawiki.action.edit",1593179100,["jquery.textSelection",
"jquery.byteLimit"],null,"common"],["mediawiki.action.view.redirect",1593179100,["jquery.client"],null,"common"],["mediawiki.action.history",1593179100,["jquery.ui.button"],"mediawiki.action.history","common"],["mediawiki.action.history.diff",1593179100,[],"mediawiki.action.history","common",["sass"]],["mediawiki.action.view.dblClickEdit",1593179100,["mediawiki.util","mediawiki.page.startup"],null,"common"],["mediawiki.action.view.metadata",1593179100,[],null,"common"],["mediawiki.action.view.rightClickEdit",1593179100,[],null,"common"],["mediawiki.action.watch.ajax",1593179100,["mediawiki.api.watch","mediawiki.util"],null,"common"],["mediawiki.language",1593179100,["mediawiki.language.data","mediawiki.cldr"],null,"common"],["mediawiki.cldr",1593179100,["mediawiki.libs.pluralruleparser"],null,"common"],["mediawiki.libs.pluralruleparser",1593179100,[],null,"common"],["mediawiki.language.init",1593179100,[],null,"common"],["mediawiki.jqueryMsg",1593179100,["mediawiki.util",
"mediawiki.language"],null,"common"],["mediawiki.language.months",1593179100,["mediawiki.language"],null,"common"],["mediawiki.language.names",1585918800,["mediawiki.language.init"]],["mediawiki.libs.jpegmeta",1593179100,[],null,"common"],["mediawiki.page.ready",1593179100,["jquery.checkboxShiftClick","jquery.makeCollapsible","jquery.mw-jump","mediawiki.util"],null,"common"],["mediawiki.page.startup",1593179100,["jquery.client","mediawiki.util"],null,"common"],["mediawiki.special",1593179100,[],null,"common"],["mediawiki.special.block",1593179100,["mediawiki.util"],null,"common"],["mediawiki.special.changeemail",1593179100,["mediawiki.util"],null,"common"],["mediawiki.special.changeslist",1593179100,["jquery.makeCollapsible"],null,"common"],["mediawiki.special.movePage",1593179100,["jquery.byteLimit"],null,"common"],["mediawiki.special.preferences",1593179100,[],null,"common"],["mediawiki.special.recentchanges",1593179100,["mediawiki.special"],null,"common"],["mediawiki.special.search"
,1593179100,[],null,"common"],["mediawiki.special.undelete",1593179100,[],null,"common"],["mediawiki.special.upload",1593179100,["mediawiki.libs.jpegmeta","mediawiki.util"],null,"common"],["mediawiki.special.javaScriptTest",1593179100,["jquery.qunit"],null,"common"],["test.sinonjs",1593179100,[],null,"common"],["mediawiki.tests.qunit.testrunner",1593288000,["jquery.qunit","jquery.qunit.completenessTest","mediawiki.page.startup","mediawiki.page.ready","test.sinonjs"],null,"common"],["mediawiki.legacy.ajax",1593179100,["mediawiki.util","mediawiki.legacy.wikibits"],null,"common"],["mediawiki.legacy.commonPrint",1593179100,[],null,"common"],["mediawiki.legacy.config",1593179100,["mediawiki.legacy.wikibits"],null,"common"],["mediawiki.legacy.IEFixes",1593179100,["mediawiki.legacy.wikibits"],null,"common"],["mediawiki.legacy.mwsuggest",1593179100,["mediawiki.legacy.wikibits"],null,"common"],["mediawiki.legacy.preview",1593179100,["mediawiki.legacy.wikibits"],null,"common"],[
"mediawiki.legacy.protect",1593179100,["mediawiki.legacy.wikibits","jquery.byteLimit"],null,"common"],["mediawiki.legacy.shared",1593179100,[],null,"common"],["mediawiki.legacy.upload",1593179100,["jquery.spinner","mediawiki.util"],null,"common"],["mediawiki.legacy.wikibits",1593179100,["mediawiki.util","wikia.importScript"],null,"common"],["mediawiki.legacy.wikiprintable",1593179100,[],null,"common"],["amd",1593179100,[],null,"common"],["amd.shared",1202225400,["wikia.cache","wikia.cookies","wikia.document","wikia.geo","wikia.fbLocale","wikia.loader","wikia.location","wikia.log","wikia.mw","wikia.nirvana","wikia.querystring","wikia.history","wikia.throbber","wikia.thumbnailer","wikia.tracker","wikia.window","wikia.abTest","underscore"],null,"common"],["wikia.window",1593179100,["amd"],null,"common"],["wikia.cache",1593179100,["amd","wikia.window"],null,"common"],["wikia.document",1593179100,["amd","wikia.window"],null,"common"],["wikia.location",1593179100,["amd","wikia.window"],null,
"common"],["wikia.nirvana",1593179100,["amd"],null,"common"],["wikia.mw",1593179100,["amd","wikia.window"],null,"common"],["wikia.fbLocale",1593179100,["wikia.geo"],null,"common"],["wikia.loader",1593179100,["amd","wikia.window","wikia.mw","wikia.nirvana","wikia.fbLocale"],null,"common"],["wikia.querystring",1593179100,["amd","wikia.window"],null,"common"],["wikia.history",1593179100,["amd","wikia.window"],null,"common"],["wikia.cookies",1593179100,["amd","wikia.window"],null,"common"],["wikia.log",1593179100,["amd","wikia.querystring","wikia.cookies"],null,"common"],["wikia.abTest",1593179100,["amd","wikia.window"],null,"common"],["wikia.thumbnailer",1593179100,["amd"],null,"common"],["wikia.geo",1593179100,["amd","wikia.cookies","wikia.querystring"],null,"common"],["wikia.tracker",1593179100,["amd","wikia.window","wikia.log","wikia.tracker.stub"],null,"common"],["wikia.tracker.stub",1593179100,["amd","wikia.window"],null,"common"],["wikia.throbber",1593179100,["amd"],null,"common"],[
"underscore",1593179100,["amd"],null,"common"],["wikia.aim",1593179100,["amd"],null,"common"],["wikia.uniqueId",1593179100,["amd"],null,"common"],["wikia.modernizr",1593288000,["amd","modernizr"],null,"common"],["wikia.mustache",1593179100,["amd"],null,"common"],["wikia.underscore",1593179100,["amd","wikia.window"],null,"common"],["wikia.stickyElement",1593179100,["amd","wikia.window","wikia.document","wikia.underscore"],null,"common"],["wikia.jquery.ui",1593179100,["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse","jquery.ui.position","jquery.ui.draggable","jquery.ui.droppable","jquery.ui.sortable","jquery.ui.autocomplete","jquery.ui.slider","jquery.ui.tabs","jquery.ui.datepicker"],"jquery.ui","common"],["jquery.mustache",1593179100,["wikia.mustache"],null,"common"],["jquery.autocomplete",1593179100,[],null,"common"],["jquery.dataTables",1593179100,[],null,"common"],["jquery.timeago",1593179100,[],null,"common"],["wikia.yui",1593179100,[],"yui","common"],["wikia.importScript",
1593179100,[],null,"common"],["wikia.article.edit",1593179100,["wikia.tracker"],null,"common"],["jquery.uls.data",1593179100],["jquery.i18n",1593179100,["mediawiki.libs.pluralruleparser"]],["ext.math.mathjax",1593179100,[],"ext.math.mathjax"],["ext.math.mathjax.enabler",1593179100],["ext.wikia.TimeAgoMessaging",1593179100,["jquery.timeago","mediawiki.jqueryMsg"]],["ext.designSystem",1202225400],["ext.bannerNotifications",1202225400],["ext.quickTools",1593179100,["mediawiki.user","mediawiki.util"]],["ext.createUserPage",1593179100,["mediawiki.user","mediawiki.util"]],["ext.quickAdopt",1593179100,["mediawiki.util","ext.createUserPage"]],["ext.wikia.authPreferences",1593179100],["ext.wikia.facebookTags",1593179100,[],null,"common"],["ext.wikia.multiLookup",1593179100],["ext.wikia.ListGlobalUsers",1593179100],["ext.geshi.local",1202225400],["ext.siteWideMessages.anon",1593179100],["ext.scribunto",1593179100],["ext.scribunto.edit",1593179100,["ext.scribunto","mediawiki.api"]],[
"ext.wikia.InfoboxBuilder",1593179100,[],null,"local",["sass"]],["ext.categoryTree",1593179100],["ext.categoryTree.css",1593179100],["ext.checkUser",1593179100,["mediawiki.util"]],["ext.cite",1593179100,["jquery.tooltip"]],["jquery.tooltip",1593179100],["ext.wikia.ajaxpoll",1593179100,[],null,"local",["sass"]],["ext.wikia.GoogleTagManager",1202225400],["ext.wikia.WMU",1593179100,["wikia.yui","jquery.aim"]],["ext.wikia.LinkSuggest",1593179100,["jquery.ui.autocomplete"]],["ext.wikia.ListUsers",1593179100,["jquery.ui.autocomplete","jquery.dataTables"],null,"local",["sass"]],["ext.abuseFilter",1593179100],["ext.abuseFilter.edit",1593179100,["jquery.textSelection","jquery.spinner"]],["ext.abuseFilter.tools",1593179100,["jquery.spinner"]],["ext.abuseFilter.examine",1593179100],["ext.tabber",1593179100],["ext.nuke",1593179100],["ext.userLogin",1202225400],["ext.UserProfilePage.Lightbox",1593179100,["mediawiki.jqueryMsg"],null,"local",["sass"]],["ext.renameuser.modal",1593179100,[
"mediawiki.util"]],["ext.AdminDashboard",1202225400],["wikia.ext.abtesting",1588608000,[],null,"common"],["wikia.ext.abt3sting",1588608000,[],null,"common"],["wikia.ext.abtest",1593179100],["wikia.ext.abtesting.edit.styles",1593179100,[],null,"local",["sass"]],["wikia.ext.abtesting.edit",1593179100],["oojs",1593179100],["oojs-ui",1593179100,["oojs","oojs-ui.styles"]],["oojs-ui.styles",1593179100],["jquery.visibleText",1593179100],["Base64.js",1593179100],["easy-deflate.core",1593179100,["Base64.js"]],["easy-deflate.deflate",1593179100,["easy-deflate.core"]],["unicodejs",1593179100],["unicodejs.wordbreak",1202225400,["unicodejs"]],["papaparse",1593179100],["rangefix",1593179100],["ext.visualEditor.viewPageTarget.init",1593179100,["jquery.client","mediawiki.page.startup","mediawiki.Title","mediawiki.Uri","mediawiki.util","user.options","ext.visualEditor.track"]],["ext.visualEditor.viewPageTarget.noscript",1593179100],["ext.visualEditor.viewPageTarget",1593179100,["ext.visualEditor.base",
"ext.visualEditor.mediawiki","ext.visualEditor.core.desktop","jquery.placeholder","mediawiki.feedback","mediawiki.jqueryMsg","mediawiki.util"]],["ext.visualEditor.mobileViewTarget",1593179100,["ext.visualEditor.base","ext.visualEditor.mediawiki.mobile","ext.visualEditor.core.mobile","ext.visualEditor.mwimage.core"]],["ext.visualEditor.ve",1593179100],["ext.visualEditor.track",1593179100,["ext.visualEditor.ve"]],["ext.visualEditor.base",1593179100,["oojs","oojs-ui","unicodejs","rangefix","ext.visualEditor.ve"]],["ext.visualEditor.mediawiki",1593179100,["jquery.visibleText","jquery.byteLength","jquery.client","mediawiki.api","mediawiki.language","mediawiki.Title","mediawiki.Uri","mediawiki.user","mediawiki.util","easy-deflate.deflate","user.options","user.tokens","ext.visualEditor.base","ext.visualEditor.track"]],["ext.visualEditor.mediawiki.mobile",1593179100,["ext.visualEditor.mediawiki","ext.visualEditor.core.mobile"]],["ext.visualEditor.standalone",1593179100,["ext.visualEditor.base"
,"jquery.i18n"]],["ext.visualEditor.data",1593179100,["ext.visualEditor.base"]],["ext.visualEditor.core",1593179100,["unicodejs","papaparse","jquery.uls.data","ext.visualEditor.base"]],["ext.visualEditor.core.desktop",1593179100,["ext.visualEditor.core"]],["ext.visualEditor.core.mobile",1593179100,["ext.visualEditor.core"]],["ext.visualEditor.mwcore",1593179100,["ext.visualEditor.core","mediawiki.Title","mediawiki.action.history.diff","mediawiki.user","mediawiki.util","mediawiki.jqueryMsg","jquery.autoEllipsis","jquery.byteLimit"]],["ext.visualEditor.mwformatting",1593179100,["ext.visualEditor.mwcore"]],["ext.visualEditor.mwimage.core",1593179100,["ext.visualEditor.mwcore"]],["ext.visualEditor.mwimage",1593179100,["ext.visualEditor.mwimage.core"]],["ext.visualEditor.mwlink",1593179100,["ext.visualEditor.mwcore"]],["ext.visualEditor.mwmeta",1593179100,["ext.visualEditor.mwcore","ext.visualEditor.mwlink"]],["ext.visualEditor.mwreference.core",1593179100,["ext.visualEditor.mwcore"]],[
"ext.visualEditor.mwreference",1593179100,["ext.visualEditor.mwreference.core","ext.visualEditor.mwtransclusion"]],["ext.visualEditor.mwtransclusion.core",1593179100,["ext.visualEditor.mwcore"]],["ext.visualEditor.mwtransclusion",1593179100,["ext.visualEditor.mwtransclusion.core","mediawiki.jqueryMsg","mediawiki.language"]],["ext.visualEditor.language",1593179100,["ext.visualEditor.core","mediawiki.language.names"]],["ext.visualEditor.mwalienextension",1593179100,["ext.visualEditor.mwcore"]],["ext.visualEditor.mwgallery",1593179100,["ext.visualEditor.mwcore"]],["ext.visualEditor.experimental",1202225400,["ext.visualEditor.language","ext.visualEditor.mwalienextension"]],["ext.visualEditor.wikia.viewPageTarget.init",1593179100,["jquery.client","jquery.byteLength","mediawiki.Title","mediawiki.Uri","mediawiki.util","user.options","ext.visualEditor.track"]],["ext.visualEditor.wikia.oasisViewPageTarget",1593179100,["ext.visualEditor.viewPageTarget"]],["ext.visualEditor.wikia.core",1593179100
,["ext.visualEditor.core.desktop","ext.visualEditor.mwimage","ext.visualEditor.mwmeta"]],["ext.closeMyAccount",1593179100,[],null,"local",["sass"]],["ext.TwitterTag",1593179100],["ext.wikia.VKTag",1593179100],["ext.ArticleVideo.jw",1593179100],["ext.fandomComMigration",1202225400],["ext.wikiaOrgMigration",1202225400],["ext.wikia.CategoryPage3.categoryLayoutSelector.scripts",1593179100],["ext.wikia.AffiliateService",1593179100,[],null,"local",["sass"]],["ext.hydralytics.styles",1593179100,[],null,"local",["sass"]],["ext.hydralytics.scripts",1593179100,["mediawiki.language"]],["ext.maps.common",1593179100,[],"ext.maps"],["ext.maps.coord",1593179100,[],"ext.maps"],["ext.maps.resizable",1202225400,["jquery.ui.resizable"],"ext.maps"],["mapeditor",1593179100,["ext.maps.common","jquery.ui.autocomplete","jquery.ui.slider","jquery.ui.dialog"],"ext.maps"],["ext.maps.services",1593179100,["ext.maps.common","ext.maps.coord"],"ext.maps"],["ext.maps.googlemaps3",1593179100,["ext.maps.common"],
"ext.maps"],["ext.maps.gm3.markercluster",1593179100,[],"ext.maps"],["ext.maps.gm3.markerwithlabel",1593179100,[],"ext.maps"],["ext.maps.gm3.geoxml",1593179100,[],"ext.maps/geoxml3"],["ext.maps.gm3.earth",1593179100,[],"ext.maps"],["ext.maps.openlayers",1593179100,["ext.maps.common"],"ext.maps"],["ext.maps.leaflet",1593179100,["ext.maps.common"],"ext.maps"],["ext.maps.leaflet.fullscreen",1593179100,["ext.maps.leaflet"],"ext.maps"],["ext.maps.leaflet.markercluster",1593179100,["ext.maps.leaflet"],"ext.maps"],["ext.maps.leaflet.providers",1593179100,["ext.maps.leaflet"],"ext.maps"]]);mw.config.set({"wgLoadScript":"/load.php","debug":!1,"skin":"oasis","stylepath":"https://slot1-images.wikia.nocookie.net/__cb1593180141208/common/skins","wgUrlProtocols":"\\/\\/|ftp\\:\\/\\/|git\\:\\/\\/|gopher\\:\\/\\/|http\\:\\/\\/|https\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|mailto\\:|mms\\:\\/\\/|news\\:|nntp\\:\\/\\/|svn\\:\\/\\/|telnet\\:\\/\\/|worldwind\\:\\/\\/|xmpp\\:","wgArticlePath":"/wiki/$1",
"wgScriptPath":"","wgScriptExtension":".php","wgScript":"/index.php","wgVariantArticlePath":!1,"wgActionPaths":{},"wgServer":"https://castlevania.fandom.com","wgUserLanguage":"en","wgContentLanguage":"en","wgVersion":"1.19.24","wgEnableAPI":!0,"wgEnableWriteAPI":!0,"wgDefaultDateFormat":"mdy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgMainPageTitle":"Castlevania Wiki","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"Castlevania Wiki","5":"Castlevania Wiki talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk","110":"Forum","111":"Forum talk","500":"User blog","501":"User blog comment","502":"Blog","503":"Blog talk","828":
"Module","829":"Module talk","1200":"Message Wall","1201":"Thread","1202":"Message Wall Greeting","2000":"Board","2001":"Board Thread","2002":"Topic"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"castlevania_wiki":4,"castlevania_wiki_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"forum":110,"forum_talk":111,"user_blog":500,"user_blog_comment":501,"blog":502,"blog_talk":503,"module":828,"module_talk":829,"message_wall":1200,"thread":1201,"message_wall_greeting":1202,"board":2000,"board_thread":2001,"topic":2002,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgSiteName":"Castlevania Wiki","wgFileExtensions":["png","gif","jpg","jpeg","ico","pdf","svg","odt","ods","odp","odg","odc","odf","odi","odm","ogg","ogv","oga"],"wgDBname":"castlevania","wgFileCanRotate":!0,"wgAvailableSkins":{"oasis":"Oasis","wikiamobile":"WikiaMobile"},
"wgExtensionAssetsPath":"/extensions","wgCookiePrefix":"wikicities","wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[],"wgLegalTitleChars":" %!\"$\x26\'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgSassParams":{"background-dynamic":"false","background-image":"https://vignette.wikia.nocookie.net/castlevania/images/5/50/Wiki-background/revision/latest?cb=20180420222610","background-image-height":"1028","background-image-width":"1920","color-body":"#000000","color-body-middle":"#bacdd8","color-buttons":"#891100","color-community-header":"#891100","color-header":"#6d0d00","color-links":"#fce300","color-page":"#000000","oasisTypography":1,"page-opacity":"76","widthType":0},"wgFandomBaseDomain":"fandom.com","wgWikiaOrgBaseDomain":"wikia.org","wgWikiaBaseDomainRegex":"((wikia\\.(com|org)|fandom\\.com)|(wikia|fandom)-dev\\.(com|us|pl))","wgServicesExternalDomain":"https://services.fandom.com/","wgRecommendedVideoABTestPlaylist":"","wgJSMessagesCB":"1593180141208.0.0",
"wgVisualEditorConfig":{"disableForAnons":!1,"preferenceModules":{"visualeditor-enable-experimental":"ext.visualEditor.experimental","visualeditor-enable-language":"ext.visualEditor.language"},"namespaces":[0,2,14,4],"pluginModules":["ext.visualEditor.wikia.core"],"defaultUserOptions":{"betatempdisable":0,"enable":1,"defaultthumbsize":180,"visualeditor-enable-experimental":0,"visualeditor-enable-language":0},"blacklist":{"msie":null,"android":[["\x3c",3]],"firefox":[["\x3c=",14]],"opera":[["\x3c",12]],"blackberry":null,"silk":null},"skins":["oasis"],"tabPosition":"before","tabMessages":{"edit":null,"editsource":"visualeditor-ca-classiceditor","create":null,"createsource":"visualeditor-ca-classiceditor","editlocaldescriptionsource":"visualeditor-ca-editlocaldescriptionsource","createlocaldescriptionsource":"visualeditor-ca-createlocaldescriptionsource","editsection":null,"editsectionsource":"visualeditor-ca-editsource-section","editappendix":null,"editsourceappendix":null,
"createappendix":null,"createsourceappendix":null,"editsectionappendix":null,"editsectionsourceappendix":null},"showBetaWelcome":!1,"enableTocWidget":!1},"wgCommunityPageDisableTopContributors":!1});mw.loader.state({"jquery":"ready"});window.preMwLdrSt&&mw.loader.state(window.preMwLdrSt);if(window.preMwLdrStA){for(var i=0;i<window.preMwLdrStA.length;i++)mw.loader.state(window.preMwLdrStA[i]);};};if(isCompatible()){document.write("\x3cscript src=\"https://slot1-images.wikia.nocookie.net/__load/-/debug%3Dfalse%26lang%3Den%26only%3Dscripts%26skin%3Doasis%26version%3D1593180141208-20200626T134500Z/jquery,mediawiki\"\x3e\x3c/script\x3e");}delete isCompatible;;

/* cache key: castlevania:resourceloader:filter:minify-js:7:7f06da12a18925ec258df007117ebb02 */