CKEDITOR.on("instanceReady",function(e){var e=e.editor,n=CKEDITOR.document.$.getElementsByName("ckeditor-sample-required-plugins"),t=[];if((n=n.length?CKEDITOR.dom.element.get(n[0]).getAttribute("content").split(","):[]).length){for(var i=0;i<n.length;i++)e.plugins[n[i]]||t.push("<code>"+n[i]+"</code>");t.length&&CKEDITOR.dom.element.createFromHtml('<div class="warning"><span>To fully experience this demo, the '+t.join(", ")+" plugin"+(1<t.length?"s are":" is")+" required.</span></div>").insertBefore(e.container)}});