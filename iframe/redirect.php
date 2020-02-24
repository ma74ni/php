<script>
    var variables = window.location.search;
    var insideIframe = window.top !== window.self;
    if(insideIframe){
        window.location.href = 'load.php' + variables;
        console.log(variables);
    }else{
        window.location.href = '404.php';
    }
</script>
