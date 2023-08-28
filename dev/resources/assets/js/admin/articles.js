try {
  window.Quill = require("quill");
  require("./quill/vendor/image-resize.min.js");
  require("./quill/vendor/image-drop.min.js");
  window.articles = require("./src/articles");
} catch (e) {
  console.error(e);
}

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
  ["link", "image"], // add's image support
];

var newEditor = document.getElementById("newEditor");
if (newEditor) {
  window.quillNew = new Quill("#newEditor", {
    modules: {
      toolbar: toolbarOptions,
      imageResize: {},
      imageDrop: true,
    },
    theme: "snow",
  });
}

var updateEditor = document.getElementById("updateEditor");
if (updateEditor) {
  window.quillUpdate = new Quill("#updateEditor", {
    modules: {
      toolbar: toolbarOptions,
      imageResize: {},
      imageDrop: true,
    },
    theme: "snow",
  });
}

$(function() {
  // On load, make sure to format the form for whatever type of article is currently selected
  var $lastType = [];
  var articles = window.articles;
  $(".article-type").each(function(index) {
    var $parent = $(this).closest("form");
    var $parentID = $parent.attr("id");
    $lastType[$parentID] = $(this).val();
    if ($(this).val() == 2) {
      articles.formatForExternal($parent);
    } else {
      articles.formatForInternal($parent);
    }
  });

  // Upon changing the title of an internal article, generate a slug and populate the location field
  $(".article-title").focusout(function() {
    var $parent = $(this).closest("form");
    var $location = $parent.find(".article-location");
    var $type = $parent.find(".article-type");
    var $currentType = $type.val();
    if ($currentType != 2) {
      $location.val(articles.generateLocation($parent));
    }
  });

  // Upon change of article type, make sure to format the form for whatever type of article was selected
  $(".article-type").change(function() {
    var $currentValue = $(this).val();
    var $parent = $(this).closest("form");
    if ($currentValue == 2) {
      articles.formatForExternal($parent);
    } else {
      articles.formatForInternal($parent);
    }
  });

  // Upon submitting the a '.quill-submission form, convert the content into html and place it in the hidden 'content' field
  // Part of the conversion adds the wrapping div "<div class='ql-render'>" which needs to be removed before reinserting into a quill environment
  $(".quill-submission").submit(function(event) {
    var $content = $(this)
      .find(".ql-editor")
      .html();
    var $editorID = $(this)
      .find(".article-editor")
      .attr("id");
    var $contentDelta = "";

    if ($editorID == "updateEditor") {
      $contentDelta = JSON.stringify(window.quillUpdate.getContents());
    } else {
      $contentDelta = JSON.stringify(window.quillNew.getContents());
    }

    var $type = $(this).find(".article-type");
    if ($type.val() != 2) {
      // Need to remove unnecessary empty divs that get appended to the content
      var $contentLength = $content.length;
      var $searchLength = "<div><br></div>".length;
      var $search = $content.slice($contentLength - $searchLength);
      if ($search == "<div><br></div>") {
        $content = $content.slice(0, $contentLength - $searchLength) + $content.slice($contentLength + $searchLength);
      }

      // Need to wrap the content in the 'ql-render' class for viewing later
      $content = '<div class="ql-render">' + $content + "</div>";

      // Set the content and the location fields
      $(this)
        .find(".article-content")
        .val($content);
      $(this)
        .find(".article-location")
        .val(articles.generateLocation($(this)));
      $(this)
        .find(".article-delta")
        .val($contentDelta);
    }
  });
});
