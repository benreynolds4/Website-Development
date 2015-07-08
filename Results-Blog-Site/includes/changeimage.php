
<script style="text/javascript">
function test() {
    $("img").each(function(index) {
        $(this).hide();
        $(this).delay(10000 * index).fadeIn(10000).fadeOut();
    });
}
test();
</script>