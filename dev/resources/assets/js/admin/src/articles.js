export function stringToSlug(str) {
  str = str.replace(/^\s+|\s+$/g, ""); // trim
  str = str.toLowerCase();

  // remove accents, swap ñ for n, etc
  var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
  var to = "aaaaeeeeiiiioooouuuunc------";
  for (var i = 0, l = from.length; i < l; i++) {
    str = str.replace(new RegExp(from.charAt(i), "g"), to.charAt(i));
  }

  str = str
    .replace(/[^a-z0-9 -]/g, "") // remove invalid chars
    .replace(/\s+/g, "-") // collapse whitespace and replace by -
    .replace(/-+/g, "-"); // collapse dashes

  return str;
}

export function generateLocation($parent) {
  var $title = $parent.find(".article-title").val();
  var $slugTitle = stringToSlug($title);
  return $slugTitle;
}

export function formatForExternal($parent) {
  $parent.find(".location-group").show();
  $parent.find(".editor-group").hide();
}

export function formatForInternal($parent) {
  $parent.find(".location-group").hide();
  $parent.find(".editor-group").show();
}

var Block = Quill.import("blots/block");
Block.tagName = "DIV";
Quill.register(Block, true);

var BlockEmbed = Quill.import("blots/block/embed");

class ImageBlot extends BlockEmbed {
  static create(value) {
    let node = super.create();
    if (typeof value === "string") {
      node.setAttribute("src", value);
    } else {
      node.setAttribute("alt", value.alt);
      node.setAttribute("src", value.url);
      node.setAttribute("class", value.class);
      node.setAttribute("width", value.width);
    }
    return node;
  }

  static value(node) {
    return {
      alt: node.getAttribute("alt"),
      url: node.getAttribute("src"),
      class: node.getAttribute("class"),
      width: node.getAttribute("width"),
    };
  }
}
ImageBlot.blotName = "image";
ImageBlot.tagName = "IMG";

Quill.register(ImageBlot, true);
