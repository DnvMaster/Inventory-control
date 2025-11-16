$(function(){
    $(document).on('click','#delete',function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        Swal.fire({
            title: 'Вы уверены?',
            text: "Хотите удалить эти данные?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#008000',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Да, удалить!',
            cancelButtonText: 'Отменить',
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link
                Swal.fire(
                   'Удалено!', 
                   'Ваш файл был удален.',
                    'success'
                )
            }
        }) 
    });

});