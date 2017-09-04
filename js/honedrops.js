$(function() {
    // Set Marked.js options.
    // Please see https://github.com/chjj/marked
    marked.setOptions({
        gfm: true,
        tables: true,
        breaks: false,
        pedantic: false,
        sanitize: false,
        smartLists: true,
        smartypants: false
    });

    // Get markdown text
    var mdsrc = $('#md_src');
    var mdtxt = mdsrc.text();
    mdsrc.hide();

    // Put rendaring text
    $('#md_out').html(marked(mdtxt));

    // Put title with h1
    var title_txt = $("title").text();
    var h1_txt = $("h1").text();
    $("title").text(h1_txt + " / " + title_txt);

    // Add external link on a-tag
    // var domain = "www.example.jp/wiki/";
    // $('a[href^=http]').not('[href*="'+domain+'"]').attr('target','_blank');
});
