function isCompatible(){if(navigator.appVersion.indexOf('MSIE')!==-1&&parseFloat(navigator.appVersion.split('MSIE')[1])<6){return false;}return true;}var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":{"loadScript":"//bits.wikimedia.org/fr.wikipedia.org/load.php","apiScript":"/w/api.php"}});(function(name,version,dependencies,group,source){})("MediaWikiSupport.loader","20121126T175337Z",[],null,"local");(function(name,version,dependencies,group,source){(function(mw,$){$(function(event){var $selected=$(mw.config.get('EmbedPlayer.RewriteSelector'));if($selected.length){var inx=0;var checkSetDone=function(){if(inx<$selected.length){$selected.slice(inx,inx+1).embedPlayer(function(){setTimeout(function(){checkSetDone();},5);});}inx++;};checkSetDone();}});$.fn.embedPlayer=function(readyCallback){var playerSet=this;mw.log('jQuery.fn.embedPlayer :: '+$(this).length);var dependencySet=['mw.EmbedPlayer'];var rewriteElementCount=0;$(this).each(function(inx,
playerElement){var skinName='';$(playerElement).removeAttr('controls');if(!$.browser.mozilla){$(playerElement).parent().getAbsoluteOverlaySpinner().attr('id','loadingSpinner_'+$(playerElement).attr('id'));}$(mw).trigger('EmbedPlayerUpdateDependencies',[playerElement,dependencySet]);});dependencySet=$.uniqueArray(dependencySet);mediaWiki.loader.using(dependencySet,function(){window.gM=mw.jqueryMsg.getMessageFunction({});mw.processEmbedPlayers(playerSet,readyCallback);},function(e){throw new Error('Error loading EmbedPlayer dependency set: '+e.message);});};})(window.mediaWiki,window.jQuery);})("EmbedPlayer.loader","20121126T175432Z",[],null,"local");(function(name,version,dependencies,group,source){(function(mw,$){$(mw).bind('EmbedPlayerUpdateDependencies',function(event,playerElement,classRequest){if(mw.isTimedTextSupported(playerElement)){classRequest=$.merge(classRequest,['mw.TimedText']);}});$(mw).bind('EmbedPlayerNewPlayer',function(event,embedPlayer){if(mw.isTimedTextSupported(
embedPlayer)){embedPlayer.timedText=new mw.TimedText(embedPlayer);}});mw.isTimedTextSupported=function(embedPlayer){var mwprovider=embedPlayer['data-mwprovider']||$(embedPlayer).data('mwprovider');var showInterface=mw.config.get('TimedText.ShowInterface.'+mwprovider)||mw.config.get('TimedText.ShowInterface');if(showInterface=='always'){return true;}else if(showInterface=='off'){return false;}if($(embedPlayer).find('track').length!=0){return true;}else{return false;}};})(window.mediaWiki,window.jQuery);})("TimedText.loader","20121126T175432Z",[],null,"local");(function(name,version,dependencies,group,source){(function(mw,$){$(mw).bind('EmbedPlayerUpdateDependencies',function(event,embedPlayer,dependencySet){if($(embedPlayer).attr('data-mwtitle')){$.merge(dependencySet,['mw.MediaWikiPlayerSupport']);}});})(window.mediaWiki,jQuery);})("mw.MediaWikiPlayer.loader","20121126T175432Z",[],null,"local");mw.loader.register([["site","1354847797",[],"site"],["noscript","1347062400",[],"noscript"],
["startup","1354879641",[],"startup"],["filepage","1347062400"],["user.groups","1347062400",[],"user"],["user","1347062400",[],"user"],["user.cssprefs","1347062400",["mediawiki.user"],"private"],["user.options","1347062400",[],"private"],["user.tokens","1347062400",[],"private"],["mediawiki.language.data","1354879641",["mediawiki.language.init"]],["skins.chick","1353952260"],["skins.cologneblue","1354215700"],["skins.modern","1354216587"],["skins.monobook","1354215700"],["skins.nostalgia","1353952260"],["skins.simple","1354215700"],["skins.standard","1353952260"],["skins.vector","1354216587"],["jquery","1353952260"],["jquery.appear","1353952260"],["jquery.arrowSteps","1353952260"],["jquery.async","1353952260"],["jquery.autoEllipsis","1353952260",["jquery.highlightText"]],["jquery.badge","1353952260"],["jquery.byteLength","1353952260"],["jquery.byteLimit","1353952260",["jquery.byteLength"]],["jquery.checkboxShiftClick","1353952260"],["jquery.client","1353952260"],[
"jquery.collapsibleTabs","1353952260",["jquery.delayedBind"]],["jquery.color","1353952260",["jquery.colorUtil"]],["jquery.colorUtil","1353952260"],["jquery.cookie","1353952260"],["jquery.delayedBind","1353952260"],["jquery.expandableField","1353952260",["jquery.delayedBind"]],["jquery.farbtastic","1353952260",["jquery.colorUtil"]],["jquery.footHovzer","1353952260"],["jquery.form","1353952260"],["jquery.getAttrs","1353952260"],["jquery.hidpi","1353952260"],["jquery.highlightText","1353952260",["jquery.mwExtension"]],["jquery.hoverIntent","1353952260"],["jquery.json","1353952260"],["jquery.localize","1353952260"],["jquery.makeCollapsible","1354847133"],["jquery.mockjax","1353952260"],["jquery.mw-jump","1353952260"],["jquery.mwExtension","1353952260"],["jquery.placeholder","1353952260"],["jquery.qunit","1353952260"],["jquery.qunit.completenessTest","1353952260",["jquery.qunit"]],["jquery.spinner","1353952260"],["jquery.jStorage","1353952260",["jquery.json"]],["jquery.suggestions",
"1353952260",["jquery.autoEllipsis"]],["jquery.tabIndex","1353952260"],["jquery.tablesorter","1354847193",["jquery.mwExtension"]],["jquery.textSelection","1353952260",["jquery.client"]],["jquery.validate","1353952260"],["jquery.xmldom","1353952260"],["jquery.tipsy","1353952260"],["jquery.ui.core","1353952260",["jquery"],"jquery.ui"],["jquery.ui.widget","1353952260",[],"jquery.ui"],["jquery.ui.mouse","1353952260",["jquery.ui.widget"],"jquery.ui"],["jquery.ui.position","1353952260",[],"jquery.ui"],["jquery.ui.draggable","1353952260",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.droppable","1353952260",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget","jquery.ui.draggable"],"jquery.ui"],["jquery.ui.resizable","1353952260",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.selectable","1353952260",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.sortable","1353952260",["jquery.ui.core",
"jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.accordion","1353952260",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.autocomplete","1353952260",["jquery.ui.core","jquery.ui.widget","jquery.ui.position"],"jquery.ui"],["jquery.ui.button","1353952260",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.datepicker","1353952260",["jquery.ui.core"],"jquery.ui"],["jquery.ui.dialog","1353952260",["jquery.ui.core","jquery.ui.widget","jquery.ui.button","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable"],"jquery.ui"],["jquery.ui.progressbar","1353952260",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.slider","1353952260",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.tabs","1353952260",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.effects.core","1353952260",["jquery"],"jquery.ui"],["jquery.effects.blind","1353952260",["jquery.effects.core"],"jquery.ui"],[
"jquery.effects.bounce","1353952260",["jquery.effects.core"],"jquery.ui"],["jquery.effects.clip","1353952260",["jquery.effects.core"],"jquery.ui"],["jquery.effects.drop","1353952260",["jquery.effects.core"],"jquery.ui"],["jquery.effects.explode","1353952260",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fade","1353952260",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fold","1353952260",["jquery.effects.core"],"jquery.ui"],["jquery.effects.highlight","1353952260",["jquery.effects.core"],"jquery.ui"],["jquery.effects.pulsate","1353952260",["jquery.effects.core"],"jquery.ui"],["jquery.effects.scale","1353952260",["jquery.effects.core"],"jquery.ui"],["jquery.effects.shake","1353952260",["jquery.effects.core"],"jquery.ui"],["jquery.effects.slide","1353952260",["jquery.effects.core"],"jquery.ui"],["jquery.effects.transfer","1353952260",["jquery.effects.core"],"jquery.ui"],["mediawiki","1353952260"],["mediawiki.api","1353952260",["mediawiki.util"]],["mediawiki.api.category",
"1353952260",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.edit","1353952260",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.parse","1353952260",["mediawiki.api"]],["mediawiki.api.titleblacklist","1353952260",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.watch","1354215700",["mediawiki.api","user.tokens"]],["mediawiki.debug","1353952260",["jquery.footHovzer"]],["mediawiki.debug.init","1353952260",["mediawiki.debug"]],["mediawiki.feedback","1353952260",["mediawiki.api.edit","mediawiki.Title","mediawiki.jqueryMsg","jquery.ui.dialog"]],["mediawiki.hidpi","1353952260",["jquery.hidpi"]],["mediawiki.htmlform","1353952260"],["mediawiki.notification","1353952260",["mediawiki.page.startup"]],["mediawiki.notify","1353952260"],["mediawiki.searchSuggest","1354847133",["jquery.autoEllipsis","jquery.client","jquery.placeholder","jquery.suggestions"]],["mediawiki.Title","1353952260",["mediawiki.util"]],["mediawiki.Uri","1354832707"],["mediawiki.user","1353952260",["jquery.cookie",
"mediawiki.api","user.options","user.tokens"]],["mediawiki.util","1354847131",["jquery.client","jquery.cookie","jquery.mwExtension","mediawiki.notify"]],["mediawiki.action.edit","1353952260",["jquery.textSelection","jquery.byteLimit"]],["mediawiki.action.edit.preview","1353952260",["jquery.form","jquery.spinner"]],["mediawiki.action.history","1353952260",[],"mediawiki.action.history"],["mediawiki.action.history.diff","1353952260",[],"mediawiki.action.history"],["mediawiki.action.view.dblClickEdit","1353952260",["mediawiki.util","mediawiki.page.startup"]],["mediawiki.action.view.metadata","1354847148"],["mediawiki.action.view.rightClickEdit","1353952260"],["mediawiki.action.watch.ajax","1347062400",["mediawiki.page.watch.ajax"]],["mediawiki.language","1353952260",["mediawiki.language.data","mediawiki.cldr"]],["mediawiki.cldr","1353952260",["mediawiki.libs.pluralruleparser"]],["mediawiki.libs.pluralruleparser","1353952260"],["mediawiki.language.init","1353952260"],["mediawiki.jqueryMsg",
"1353952260",["mediawiki.util","mediawiki.language"]],["mediawiki.libs.jpegmeta","1353952260"],["mediawiki.page.ready","1353952260",["jquery.checkboxShiftClick","jquery.makeCollapsible","jquery.placeholder","jquery.mw-jump","mediawiki.util"]],["mediawiki.page.startup","1353952260",["jquery.client","mediawiki.util"]],["mediawiki.page.patrol.ajax","1354847281",["mediawiki.page.startup","mediawiki.api","mediawiki.util","mediawiki.Title","mediawiki.notify","jquery.spinner","user.tokens"]],["mediawiki.page.watch.ajax","1354847137",["mediawiki.page.startup","mediawiki.api.watch","mediawiki.util","mediawiki.notify","jquery.mwExtension"]],["mediawiki.special","1353952260"],["mediawiki.special.block","1353952260",["mediawiki.util"]],["mediawiki.special.changeemail","1354858347",["mediawiki.util"]],["mediawiki.special.changeslist","1353952260",["jquery.makeCollapsible"]],["mediawiki.special.movePage","1353952260",["jquery.byteLimit"]],["mediawiki.special.preferences","1354215700"],[
"mediawiki.special.recentchanges","1353952260",["mediawiki.special"]],["mediawiki.special.search","1354847200"],["mediawiki.special.undelete","1353952260"],["mediawiki.special.upload","1354848430",["mediawiki.libs.jpegmeta","mediawiki.util"]],["mediawiki.special.javaScriptTest","1353952260",["jquery.qunit"]],["mediawiki.tests.qunit.testrunner","1353952260",["jquery.qunit","jquery.qunit.completenessTest","mediawiki.page.startup","mediawiki.page.ready"]],["mediawiki.legacy.ajax","1353952260",["mediawiki.util","mediawiki.legacy.wikibits"]],["mediawiki.legacy.commonPrint","1353952260"],["mediawiki.legacy.config","1353952260",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.IEFixes","1353952260",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.protect","1353952260",["mediawiki.legacy.wikibits","jquery.byteLimit"]],["mediawiki.legacy.shared","1353952260"],["mediawiki.legacy.oldshared","1353952260"],["mediawiki.legacy.upload","1353952260",["mediawiki.legacy.wikibits","mediawiki.util"]],[
"mediawiki.legacy.wikibits","1353952260",["mediawiki.util"]],["mediawiki.legacy.wikiprintable","1353952260"],["ext.gadget.CoinsArrondis","1347062400"],["ext.gadget.dictionaryLookupHover","1347062400"],["ext.gadget.EbauchesOff","1347062400"],["ext.gadget.FlecheHaut","1347062400"],["ext.gadget.HomonymiesEnCouleur","1347062400"],["ext.gadget.interProjets","1347062400"],["ext.gadget.mwEmbed","1347062400"],["ext.gadget.newCollapsible","1347948141",["jquery.client"]],["ext.gadget.referencederoulante","1347062400"],["ext.gadget.tooltipRef","1347062400"],["ext.gadget.WikiMiniAtlas","1347062400"],["ext.gadget.EditZeroth","1347062400",["mediawiki.util"]],["ext.gadget.OngletGoogle","1347062400",["mediawiki.util"]],["ext.gadget.OngletJournal","1347062400",["mediawiki.util"]],["ext.gadget.OngletPurge","1347062400",["mediawiki.util"]],["ext.gadget.SupprimerInfoBulles","1347062400"],["ext.gadget.monBrouillon","1347062400",["mediawiki.util"]],["ext.gadget.iRef","1347062400"],[
"ext.gadget.AjoutBoutonSource","1347062400",["mediawiki.action.edit"]],["ext.gadget.BoutonSourceEnLigne","1347062400",["mediawiki.action.edit"]],["ext.gadget.BoutonPatrouille","1353679819",["mediawiki.action.edit"]],["ext.gadget.BoutonPlus","1348538512",["mediawiki.action.edit"]],["ext.gadget.DeluxeBar","1347062400",["mediawiki.action.edit"]],["ext.gadget.CaracteresOff","1347062400"],["ext.gadget.DeluxeHistory","1347062400"],["ext.gadget.SuiviSimple","1347062400"],["ext.gadget.ConfirmRollback","1347062400"],["ext.gadget.Accessibility","1347062400",["jquery.cookie"]],["ext.gadget.OptimizedShort","1347062400"],["mw.MwEmbedSupport","1353952417",["jquery.triggerQueueCallback","Spinner","jquery.loadingSpinner","jquery.mwEmbedUtil","mw.MwEmbedSupport.style"]],["Spinner","1353952417"],["iScroll","1353952417"],["jquery.loadingSpinner","1353952417"],["mw.MwEmbedSupport.style","1353952417"],["mediawiki.UtilitiesTime","1353952417"],["mediawiki.client","1353952417"],["mediawiki.absoluteUrl",
"1353952417"],["mw.ajaxProxy","1353952417"],["fullScreenApi","1353952417"],["jquery.menu","1353952417"],["jquery.ui.touchPunch","1353952417",["jquery.ui.core","jquery.ui.mouse"]],["jquery.triggerQueueCallback","1353952417"],["jquery.mwEmbedUtil","1353952417",["jquery.ui.dialog"]],["jquery.debouncedresize","1353952417"],["mw.Language.names","1353952417"],["mw.Api","1353952417"],["mw.MediaElement","1353952472"],["mw.MediaPlayer","1353952472"],["mw.MediaPlayers","1353952472",["mw.MediaPlayer"]],["mw.MediaSource","1353952472"],["mw.EmbedTypes","1353952472",["mw.MediaPlayers","mediawiki.Uri"]],["mw.EmbedPlayer","1354847226",["mediawiki.client","mediawiki.UtilitiesTime","mediawiki.Uri","mediawiki.absoluteUrl","mediawiki.jqueryMsg","fullScreenApi","mw.EmbedPlayerNative","mw.MediaElement","mw.MediaPlayers","mw.MediaSource","mw.EmbedTypes","jquery.client","jquery.hoverIntent","jquery.cookie","jquery.ui.mouse","jquery.debouncedresize","jquery.menu","jquery.ui.slider","jquery.ui.touchPunch",
"mw.PlayerSkinKskin"]],["mw.EmbedPlayerKplayer","1353952472"],["mw.EmbedPlayerGeneric","1353952472"],["mw.EmbedPlayerJava","1353952472"],["mw.EmbedPlayerNative","1353952472"],["mw.EmbedPlayerImageOverlay","1353952472"],["mw.EmbedPlayerVlc","1353952472"],["mw.PlayerSkinKskin","1353952472"],["mw.PlayerSkinMvpcf","1353952472"],["mw.TimedText","1354847226",["mw.EmbedPlayer","jquery.ui.dialog","mw.TextSource"]],["mw.TextSource","1353952472",["mediawiki.UtilitiesTime","mw.ajaxProxy"]],["mobile.device.default","1354664939"],["mobile.device.webkit","1354664939"],["mobile.device.android","1354664939"],["mobile.device.iphone","1354664939"],["mobile.device.iphone2","1354664939"],["mobile.device.palm_pre","1354664939"],["mobile.device.kindle","1354664939"],["mobile.device.blackberry","1354664939"],["mobile.device.simple","1354664939"],["mobile.device.psp","1354664939"],["mobile.device.wii","1354664939"],["mobile.device.operamini","1354664939"],["mobile.device.operamobile","1354664939"],[
"mobile.device.nokia","1354664939"],["ext.wikihiero","1353952629"],["ext.wikihiero.Special","1353952629",["jquery.spinner"]],["ext.cite","1353952313",["jquery.tooltip"]],["jquery.tooltip","1353952313"],["ext.specialcite","1353952313"],["ext.geshi.local","1347062400"],["ext.categoryTree","1354847231"],["ext.categoryTree.css","1353952294"],["ext.nuke","1353952421"],["ext.centralauth","1354848370"],["ext.centralauth.noflash","1353952305"],["ext.centralauth.globalusers","1353952305"],["ext.centralauth.globalgrouppermissions","1353952305"],["ext.centralNotice.interface","1354302332",["jquery.ui.datepicker"]],["ext.centralNotice.bannerStats","1353952308"],["ext.centralNotice.bannerController","1354302332"],["ext.collection.jquery.jstorage","1353952324",["jquery.json"]],["ext.collection.suggest","1353952324",["ext.collection.bookcreator"]],["ext.collection","1353952324",["ext.collection.bookcreator","jquery.ui.sortable"]],["ext.collection.bookcreator","1353952324",[
"ext.collection.jquery.jstorage"]],["ext.collection.checkLoadFromLocalStorage","1353952324",["ext.collection.jquery.jstorage"]],["ext.abuseFilter","1353952271"],["ext.abuseFilter.edit","1354868885",["mediawiki.util","jquery.textSelection","jquery.spinner"]],["ext.abuseFilter.tools","1353952271",["mediawiki.util","jquery.spinner"]],["ext.abuseFilter.examine","1353952271",["mediawiki.util"]],["ext.vector.collapsibleNav","1354847133",["mediawiki.util","jquery.client","jquery.cookie","jquery.tabIndex"],"ext.vector"],["ext.vector.collapsibleTabs","1353952524",["jquery.collapsibleTabs","jquery.delayedBind"],"ext.vector"],["ext.vector.editWarning","1354847133",[],"ext.vector"],["ext.vector.expandableSearch","1353952524",["jquery.client","jquery.expandableField","jquery.delayedBind"],"ext.vector"],["ext.vector.footerCleanup","1353952524",["mediawiki.jqueryMsg","jquery.cookie"],"ext.vector"],["ext.vector.sectionEditLinks","1353952524",["jquery.cookie","jquery.clickTracking"],"ext.vector"],[
"contentCollector","1353952567",[],"ext.wikiEditor"],["jquery.wikiEditor","1354847172",["jquery.client","jquery.textSelection","jquery.delayedBind"],"ext.wikiEditor"],["jquery.wikiEditor.iframe","1353952567",["jquery.wikiEditor","contentCollector"],"ext.wikiEditor"],["jquery.wikiEditor.dialogs","1353952567",["jquery.wikiEditor","jquery.wikiEditor.toolbar","jquery.ui.dialog","jquery.ui.button","jquery.ui.draggable","jquery.ui.resizable","jquery.tabIndex"],"ext.wikiEditor"],["jquery.wikiEditor.dialogs.config","1354847172",["jquery.wikiEditor","jquery.wikiEditor.dialogs","jquery.wikiEditor.toolbar.i18n","jquery.suggestions","mediawiki.Title"],"ext.wikiEditor"],["jquery.wikiEditor.highlight","1353952567",["jquery.wikiEditor","jquery.wikiEditor.iframe"],"ext.wikiEditor"],["jquery.wikiEditor.preview","1353952567",["jquery.wikiEditor"],"ext.wikiEditor"],["jquery.wikiEditor.previewDialog","1353952567",["jquery.wikiEditor","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],[
"jquery.wikiEditor.publish","1353952567",["jquery.wikiEditor","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.templateEditor","1353952567",["jquery.wikiEditor","jquery.wikiEditor.iframe","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.templates","1353952567",["jquery.wikiEditor","jquery.wikiEditor.iframe"],"ext.wikiEditor"],["jquery.wikiEditor.toc","1353952567",["jquery.wikiEditor","jquery.wikiEditor.iframe","jquery.ui.draggable","jquery.ui.resizable","jquery.autoEllipsis","jquery.color"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar","1353952567",["jquery.wikiEditor","jquery.wikiEditor.toolbar.i18n"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.config","1353952567",["jquery.wikiEditor","jquery.wikiEditor.toolbar.i18n","jquery.wikiEditor.toolbar","jquery.cookie","jquery.async"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.i18n","1347062400",[],"ext.wikiEditor"],["ext.wikiEditor","1353952567",["jquery.wikiEditor"],"ext.wikiEditor"],[
"ext.wikiEditor.dialogs","1353952567",["ext.wikiEditor","ext.wikiEditor.toolbar","jquery.wikiEditor.dialogs","jquery.wikiEditor.dialogs.config"],"ext.wikiEditor"],["ext.wikiEditor.highlight","1353952567",["ext.wikiEditor","jquery.wikiEditor.highlight"],"ext.wikiEditor"],["ext.wikiEditor.preview","1353952567",["ext.wikiEditor","jquery.wikiEditor.preview"],"ext.wikiEditor"],["ext.wikiEditor.previewDialog","1353952567",["ext.wikiEditor","jquery.wikiEditor.previewDialog"],"ext.wikiEditor"],["ext.wikiEditor.publish","1353952567",["ext.wikiEditor","jquery.wikiEditor.publish"],"ext.wikiEditor"],["ext.wikiEditor.templateEditor","1353952567",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.templateEditor"],"ext.wikiEditor"],["ext.wikiEditor.templates","1353952567",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.templates"],"ext.wikiEditor"],["ext.wikiEditor.toc","1353952567",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.toc"],"ext.wikiEditor"],[
"ext.wikiEditor.tests.toolbar","1353952567",["ext.wikiEditor.toolbar"],"ext.wikiEditor"],["ext.wikiEditor.toolbar","1353952567",["ext.wikiEditor","jquery.wikiEditor.toolbar","jquery.wikiEditor.toolbar.config"],"ext.wikiEditor"],["ext.wikiEditor.toolbar.hideSig","1353952567",[],"ext.wikiEditor"],["mobile.site","1347062400",[],"site"],["mobile.desktop","1354664939",["jquery.cookie"]],["ext.math.mathjax","1353952403",[],"ext.math.mathjax"],["ext.math.mathjax.enabler","1353952403"],["ext.babel","1353952292"],["ext.apiSandbox","1353952275",["mediawiki.util","jquery.ui.button"]],["ext.interwiki.specialpage","1353952387",["jquery.makeCollapsible"]],["ext.postEdit","1354847231",["jquery.cookie"]],["ext.checkUser","1353952312",["mediawiki.util"]],["mw.PopUpMediaTransform","1353952472",["jquery.ui.dialog"]],["embedPlayerIframeStyle","1353952472"],["ext.tmh.transcodetable","1353952472"],["mw.MediaWikiPlayerSupport","1353952472",["mw.Api"]]]);mw.config.set({"wgLoadScript":
"//bits.wikimedia.org/fr.wikipedia.org/load.php","debug":false,"skin":"vector","stylepath":"//bits.wikimedia.org/static-1.21wmf5/skins","wgUrlProtocols":"http\\:\\/\\/|https\\:\\/\\/|ftp\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|gopher\\:\\/\\/|telnet\\:\\/\\/|nntp\\:\\/\\/|worldwind\\:\\/\\/|mailto\\:|news\\:|svn\\:\\/\\/|git\\:\\/\\/|mms\\:\\/\\/|\\/\\/","wgArticlePath":"/wiki/$1","wgScriptPath":"/w","wgScriptExtension":".php","wgScript":"/w/index.php","wgVariantArticlePath":false,"wgActionPaths":{},"wgServer":"//fr.wikipedia.org","wgUserLanguage":"fr","wgContentLanguage":"fr","wgVersion":"1.21wmf5","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgMainPageTitle":"Wikipédia:Accueil principal","wgFormattedNamespaces":{"-2":"Média","-1":"Spécial","0":"","1":"Discussion","2":"Utilisateur","3":"Discussion utilisateur","4":"Wikipédia","5":"Discussion Wikipédia","6":"Fichier","7":"Discussion fichier","8":"MediaWiki","9":"Discussion MediaWiki","10":"Modèle","11":"Discussion modèle","12":"Aide"
,"13":"Discussion aide","14":"Catégorie","15":"Discussion catégorie","100":"Portail","101":"Discussion Portail","102":"Projet","103":"Discussion Projet","104":"Référence","105":"Discussion Référence"},"wgNamespaceIds":{"média":-2,"spécial":-1,"":0,"discussion":1,"utilisateur":2,"discussion_utilisateur":3,"wikipédia":4,"discussion_wikipédia":5,"fichier":6,"discussion_fichier":7,"mediawiki":8,"discussion_mediawiki":9,"modèle":10,"discussion_modèle":11,"aide":12,"discussion_aide":13,"catégorie":14,"discussion_catégorie":15,"portail":100,"discussion_portail":101,"projet":102,"discussion_projet":103,"référence":104,"discussion_référence":105,"discuter":1,"discussion_image":7,"wikipedia":4,"wp":4,"discussion_wikipedia":5,"utilisatrice":2,"discussion_utilisatrice":3,"image":6,"image_talk":7,"media":-2,"special":-1,"talk":1,"user":2,"user_talk":3,"project":4,"project_talk":5,"file":6,"file_talk":7,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,
"category":14,"category_talk":15},"wgSiteName":"Wikipédia","wgFileExtensions":["png","gif","jpg","jpeg","xcf","pdf","mid","ogg","ogv","svg","djvu","tiff","tif","ogg","ogv","oga","webm"],"wgDBname":"frwiki","wgFileCanRotate":true,"wgAvailableSkins":{"chick":"Chick","vector":"Vector","nostalgia":"Nostalgia","simple":"Simple","standard":"Standard","myskin":"MySkin","monobook":"MonoBook","cologneblue":"CologneBlue","modern":"Modern"},"wgExtensionAssetsPath":"//bits.wikimedia.org/static-1.21wmf5/extensions","wgCookiePrefix":"frwiki","wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[],"EmbedPlayer.DirectFileLinkWarning":true,"EmbedPlayer.EnableOptionsMenu":true,"EmbedPlayer.DisableJava":false,"TimedText.ShowInterface":"always","TimedText.ShowAddTextLink":true,"EmbedPlayer.WebPath":"//bits.wikimedia.org/static-1.21wmf5/extensions/TimedMediaHandler/MwEmbedModules/EmbedPlayer","wgCortadoJarFile":false,"TimedText.ShowInterface.local":"off","AjaxRequestTimeout":30,
"MediaWiki.DefaultProvider":"local","MediaWiki.ApiProviders":{"wikimediacommons":{"url":"//commons.wikimedia.org/w/api.php"}},"MediaWiki.ApiPostActions":["login","purge","rollback","delete","undelete","protect","block","unblock","move","edit","upload","emailuser","import","userrights"],"EmbedPlayer.OverlayControls":true,"EmbedPlayer.CodecPreference":["webm","h264","ogg"],"EmbedPlayer.DisableVideoTagSupport":false,"EmbedPlayer.DisableHTML5FlashFallback":false,"EmbedPlayer.ReplaceSources":null,"EmbedPlayer.EnableFlavorSelector":false,"EmbedPlayer.EnableIpadHTMLControls":true,"EmbedPlayer.WebKitPlaysInline":false,"EmbedPlayer.EnableIpadNativeFullscreen":false,"EmbedPlayer.iPhoneShowHTMLPlayScreen":true,"EmbedPlayer.ForceLargeReplayButton":false,"EmbedPlayer.LibraryPage":"http://www.kaltura.org/project/HTML5_Video_Media_JavaScript_Library","EmbedPlayer.RewriteSelector":"video,audio,playlist","EmbedPlayer.DefaultSize":"400x300","EmbedPlayer.ControlsHeight":31,"EmbedPlayer.TimeDisplayWidth":
85,"EmbedPlayer.KalturaAttribution":true,"EmbedPlayer.AttributionButton":{"title":"Kaltura html5 video library","href":"http://www.kaltura.com","class":"kaltura-icon","style":[],"iconurl":false},"EmbedPlayer.EnableRightClick":true,"EmbedPlayer.EnabledOptionsMenuItems":["playerSelect","download","share","aboutPlayerLibrary"],"EmbedPlayer.WaitForMeta":true,"EmbedPlayer.ShowNativeWarning":true,"EmbedPlayer.ShowPlayerAlerts":true,"EmbedPlayer.EnableFullscreen":true,"EmbedPlayer.EnableTimeDisplay":true,"EmbedPlayer.EnableVolumeControl":true,"EmbedPlayer.NewWindowFullscreen":false,"EmbedPlayer.FullscreenTip":true,"EmbedPlayer.FirefoxLink":"http://www.mozilla.com/en-US/firefox/upgrade.html?from=mwEmbed","EmbedPlayer.NativeControls":false,"EmbedPlayer.NativeControlsMobileSafari":true,"EmbedPlayer.FullScreenZIndex":999998,"EmbedPlayer.ShareEmbedMode":"iframe","EmbedPlayer.SkinList":["mvpcf","kskin"],"EmbedPlayer.DefaultSkin":"mvpcf","EmbedPlayer.MonitorRate":250,"EmbedPlayer.UseFlashOnAndroid":
false,"EmbedPlayer.EnableURLTimeEncoding":"flash","EmbedPLayer.IFramePlayer.DomainWhiteList":"*","EmbedPlayer.EnableIframeApi":true,"EmbedPlayer.PageDomainIframe":true,"EmbedPlayer.NotPlayableDownloadLink":true,"EmbedPlayer.BlackPixel":"data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%00%01%00%00%00%01%08%02%00%00%00%90wS%DE%00%00%00%01sRGB%00%AE%CE%1C%E9%00%00%00%09pHYs%00%00%0B%13%00%00%0B%13%01%00%9A%9C%18%00%00%00%07tIME%07%DB%0B%0A%17%041%80%9B%E7%F2%00%00%00%19tEXtComment%00Created%20with%20GIMPW%81%0E%17%00%00%00%0CIDAT%08%D7c%60%60%60%00%00%00%04%00%01\'4\'%0A%00%00%00%00IEND%AEB%60%82","TimedText.ShowRequestTranscript":false,"TimedText.NeedsTranscriptCategory":"Videos needing subtitles","TimedText.BottomPadding":10,"TimedText.BelowVideoBlackBoxHeight":40,"wgCollectionVersion":"1.6.1","wgCollapsibleNavBucketTest":false,"wgCollapsibleNavForceNewVersion":false,"wgWikiEditorToolbarClickTracking":false,"wgWikiEditorMagicWords":{"redirect":"#REDIRECTION","img_right":"droite",
"img_left":"gauche","img_none":"néant","img_center":"centré","img_thumbnail":"vignette","img_framed":"cadre","img_frameless":"sans_cadre"},"wgNoticeFundraisingUrl":"https://donate.wikimedia.org/wiki/Special:LandingCheck","wgCentralPagePath":"//meta.wikimedia.org/w/index.php","wgNoticeBannerListLoader":"Spécial:BannerListLoader","wgCentralBannerDispatcher":"//meta.wikimedia.org/wiki/Special:BannerRandom","wgCentralBannerRecorder":"//meta.wikimedia.org/wiki/Special:RecordImpression","wgNoticeXXCountries":["XX","EU","AP","A1","A2","O1"],"wgNoticeNumberOfBuckets":4,"wgNoticeBucketExpiry":7,"wgNoticeNumberOfControllerBuckets":2,"wgCookiePath":"/","wgMFStopRedirectCookieHost":".wikipedia.org"});};if(isCompatible()){document.write(
"\x3cscript src=\"//bits.wikimedia.org/fr.wikipedia.org/load.php?debug=false\x26amp;lang=fr\x26amp;modules=jquery%2Cmediawiki%2CSpinner%7Cjquery.triggerQueueCallback%2CloadingSpinner%2CmwEmbedUtil%7Cmw.MwEmbedSupport\x26amp;only=scripts\x26amp;skin=vector\x26amp;version=20121126T175337Z\"\x3e\x3c/script\x3e");}delete isCompatible;
/* cache key: frwiki:resourceloader:filter:minify-js:7:40b6307ddea52c0153c4a76658b500f9 */