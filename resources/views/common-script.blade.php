<script>
    function addFormData(form , url , fn = null , submitBtn = null , loader =null , redirectUrl = null ){
        form.append("_token" , "{{csrf_token()}}");
        if(loader != null){
            loader.classList.remove("d-none");
        }
        $.ajax({
            url : url,
            type : 'POST',
            data : form,
            processData : false,
            contentType : false,
            success:function(res)
            {
                if(submitBtn != null){
                        // submitBtn.removeAttribute('disabled' , true);
                }

                if(loader != null){
                    loader.classList.add("d-none");
                }

                if(res.status)
                {
                    if(fn != null){
                            fn();
                        }

                    Swal.fire({
                        text: res.msg,
                        icon: "success"
                    });
                }else{
                    Swal.fire({
                        title: res.msg,
                        text: res.error,
                        icon: 'error',
                    })
                }
            }
        })
    }



</script>