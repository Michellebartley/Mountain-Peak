jQuery.plot.plugins.push({init:function(s){s.hooks.processDatapoints.push(function(s,n,t){if(null!=n.stack&&!1!==n.stack){s=function(s,n){for(var t=null,i=0;i<n.length&&s!=n[i];++i)n[i].stack==s.stack&&(t=n[i]);return t}(n,s.getData());if(s){for(var i,l,o,e,f,u,p,a=t.pointsize,r=t.points,h=s.datapoints.pointsize,c=s.datapoints.points,g=[],k=n.lines.show,s=n.bars.horizontal,m=2<a&&(s?t.format[2].x:t.format[2].y),v=k&&n.lines.steps,z=!0,b=s?1:0,d=s?0:1,y=0,D=0;;){if(y>=r.length)break;if(u=g.length,null==r[y]){for(p=0;p<a;++p)g.push(r[y+p]);y+=a}else if(D>=c.length){if(!k)for(p=0;p<a;++p)g.push(r[y+p]);y+=a}else if(null==c[D]){for(p=0;p<a;++p)g.push(null);z=!0,D+=h}else{if(i=r[y+b],l=r[y+d],o=c[D+b],e=c[D+d],f=0,i==o){for(p=0;p<a;++p)g.push(r[y+p]);g[u+d]+=e,f=e,y+=a,D+=h}else if(o<i){if(k&&0<y&&null!=r[y-a]){for(l=l+(r[y-a+d]-l)*(o-i)/(r[y-a+b]-i),g.push(o),g.push(l+e),p=2;p<a;++p)g.push(r[y+p]);f=e}D+=h}else{if(z&&k){y+=a;continue}for(p=0;p<a;++p)g.push(r[y+p]);k&&0<D&&null!=c[D-h]&&(f=e+(c[D-h+d]-e)*(i-o)/(c[D-h+b]-o)),g[u+d]+=f,y+=a}z=!1,u!=g.length&&m&&(g[u+2]+=f)}if(v&&u!=g.length&&0<u&&null!=g[u]&&g[u]!=g[u-a]&&g[u+1]!=g[u-a+1]){for(p=0;p<a;++p)g[u+a+p]=g[u+p];g[u+1]=g[u-a+1]}}t.points=g}}})},options:{series:{stack:null}},name:"stack",version:"1.2"});