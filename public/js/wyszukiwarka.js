$(document).ready(function(){
    $("#wyszukiwarka").keyup(function(){
        let inputVal = $("#wyszukiwarka").val();
        $(".listItem").each(function()
        {
            let id=this.id;
            this.style.display="block";
            if(!id.includes(inputVal))
            {
                this.style.display="none";
            }
        });
    });
});
