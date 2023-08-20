$(document).ready(function(){
    $(".date").each(function()
    {
        let deadline=new Date($(this).text());
        let sub=Math.abs(new Date()-deadline)/(1000 * 60 * 60 * 24);
        if(sub<=3){
            $(this).closest(".listItem").css("border-color","red");
        }
    });
});
