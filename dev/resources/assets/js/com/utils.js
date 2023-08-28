export function listExpand(listSelectors, cutoffIndex) {
  var list_item_max = cutoffIndex;
  var cutoff = list_item_max - 2;
  for (const listSelector of listSelectors) {
    var $this = $(listSelector);
    if ($this.find("li").length > list_item_max) {
      //if looking for direct descendants then do .children('div').length
      $this.children("li.icon-list__item:gt(" + cutoff + ")").hide();
      $this.append('<li class="icon-list__item more">more...</li>');
    }
  }

  $(document).on("click", "li.more", function() {
    var $parent = $(this).parent();
    $parent.children("li.more").remove();
    $parent.children("li.icon-list__item:gt(" + cutoff + ")").slideToggle();
    $parent.append('<li class="icon-list__item less">less...</li>');
  });

  $(document).on("click", "li.less", function() {
    var $parent = $(this).parent();
    $parent.children("li.less").remove();
    $parent.children("li.icon-list__item:gt(" + cutoff + ")").slideToggle();
    $parent.append('<li class="icon-list__item more">more...</li>');
  });
}
