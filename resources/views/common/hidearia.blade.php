<script>
//クリックすると表示されるボタン
$(function(){
    $(".show-button").click(function(){
        var $this = $(this);
        var $target = $this.next();
        if($target.css('display') == 'none'){
            $target.slideDown(400);
            $this.text("隠す");
        }else{
            $target.slideUp(400);
            $this.text("表示する")
        };
    });
});
</script>