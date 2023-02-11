$(".btnDelete").on('click', (e)=> {
    let = element = e.target;
    let ID = element.dataset.id;
    location = "/admin/delete_user.php?user_id=" + ID;  
});


// $(".add10users").on('click', ()=> {
//     location = "/config/autoAdd10Users.php";
// })