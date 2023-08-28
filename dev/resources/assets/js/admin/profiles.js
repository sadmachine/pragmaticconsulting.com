try {
  window.Quill = require("quill");
  window.profiles = require("./src/profiles");
  window.utils = require("./utils");
} catch (e) {
  console.error(e);
}

// Set our toolbar options for our Quill editors
var toolbarOptions = [
  ["bold", "italic", "underline", "strike"], // toggled buttons
  ["blockquote"],

  [{ list: "ordered" }, { list: "bullet" }],
  [{ indent: "-1" }, { indent: "+1" }], // outdent/indent

  [{ header: [1, 2, 3, 4, 5, 6, false] }],
  [{ font: [] }],
  [{ size: ["small", false, "large", "huge"] }], // custom dropdown
  [{ align: [] }],
  [{ color: [] }, { background: [] }], // dropdown with defaults from theme
];

// Create our custom block tag (<div> instead of <p>)
var Block = Quill.import("blots/block");
Block.tagName = "DIV";
Quill.register(Block, true);
// Initialize our "new" profile editor, if it exists
var quillNew, quillUpdate;
var newEditor = document.getElementById("newEditor");
if (newEditor) {
  window.quillNew = new Quill("#newEditor", {
    modules: {
      toolbar: toolbarOptions,
    },
    theme: "snow",
  });
}

// Initialize our "update" profile editor, if it exists
var updateEditor = document.getElementById("updateEditor");
if (updateEditor) {
  window.quillUpdate = new Quill("#updateEditor", {
    modules: {
      toolbar: toolbarOptions,
    },
    theme: "snow",
  });
}

$(function() {
  // Upon submitting the a .quill-submission form, convert the content into html and place it in the hidden 'content' field
  $(".quill-submission").submit(function(event) {
    var $content = $(this)
      .find(".ql-editor")
      .html();
    // Set the content and the location fields
    $(this)
      .find(".profile-content")
      .val($content);
    return true;
  });
  utils.initCustomFileEvents();
});
