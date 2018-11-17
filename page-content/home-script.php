<script>
    function navToDetails() {
        window.location.href = "details.php";
    }
    function onCardClick(ev) {
        if(ev.keyCode==13){
            navToDetails()
        }
        else if(ev.charCode==32){
            ev.preventDefault();navToDetails();
        } else if (ev.type == "click") {navToDetails();
        }
    }
</script>