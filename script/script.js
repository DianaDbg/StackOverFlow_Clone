//Quill - Editor
var quill = new Quill('#editor', {
	modules: {
	  toolbar: [
	    ['bold', 'italic'],
	    ['link', 'blockquote', 'code-block', 'image'],
	    [{ list: 'ordered' }, { list: 'bullet' }]
	  ]
	},
  	theme: 'snow'
});

var form = document.querySelector('.login-form');
form.onsubmit = function() {
  var postBody = document.querySelector('input[name=post-body]');
  postBody.value = JSON.stringify(quill.getContents());
  
  console.log("Submitted", $(form).serialize(), $(form).serializeArray());
 
};

function quillGetHTML(inputDelta) {
    var tempCont = document.createElement("div");
    (new Quill(tempCont)).setContents(inputDelta);
    return console.log(tempCont.getElementsByClassName("ql-editor")[0].innerHTML);
}


$(".js-example-tags").select2({
  tags: true
})

