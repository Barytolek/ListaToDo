$(document).ready(function(){
    $(".stan").each(function(){

        let stan=$(this).val();
        let color = $('.listItem').css("border-left-color");
        let deadline=new Date($(this).parent().parent(".listItem").find('.deadline').text());
        let teraz=new Date();

        teraz.setHours(0, 0, 0, 0);
        deadline.setHours(0, 0, 0, 0);
        let sub=Math.abs(teraz-deadline)/(1000 * 60 * 60 * 24);

        if(stan==1)
            $(this).closest(".listItem").css("border-color", "green");
        else if(sub<=3 && color!="green")
            $(this).closest(".listItem").css("border-color","red");
        else
            $(this).closest(".listItem").css("border-color", "#0d6efd");


    });
});
