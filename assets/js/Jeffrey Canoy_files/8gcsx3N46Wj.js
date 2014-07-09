/*!CK:3214083156!*//*1402988182,*/

if (self.CavalryLogger) { CavalryLogger.start_js(["HgjJC"]); }

__d("legacy:DownloadDialog",["DownloadDialog"],function(a,b,c,d){a.DownloadDialog=b('DownloadDialog');},3);
__d("TimelineYearOverviewClickLogging",["BanzaiLogger","Event","Parent","tidyEvent"],function(a,b,c,d,e,f,g,h,i,j){var k=10,l='data-logging';function m(n,o){j(h.listen(o,'click',function(p){var q=i.byAttribute(p.getTarget(),l);if(q){n.event=q.getAttribute(l);g.create({delay:k}).log('TimelineYearOverviewLoggerConfig',n);}}));}f.init=m;},null);