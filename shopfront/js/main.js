document.querySelector('.toggle-menu').addEventListener('click', function (e) {
    e.preventDefault();
    var x = document.getElementById("myTopnav");
    // x.className += " responsive";
    if (x.className ==="topnav clearfix") {
        x.className += " responsive";
    } else {
        x.className = "topnav clearfix";
    }
});

function myFunction1() {
    var x = document.getElementById("myTopnav1");
    
    if (x.className === "leftnav") {
        x.className += " responsive";
    } else {
        x.className = "leftnav";
    }
}

function searchForm() {
    var errorMsg = "";
    var errorMsgLong = "";

    //search
    if (document.form9.search.value.length <= 2) {
        errorMsg += "Enter atleast 3 characters !";
    }

    //If there is aproblem with the form then display an error
    if ((errorMsg != "") || (errorMsgLong != "")) {
        msg = "Please\n";

        errorMsg += alert(msg + errorMsg + "\n" + errorMsgLong);
        document.form9.search.focus();
        return false;
    }
    return true;
}

