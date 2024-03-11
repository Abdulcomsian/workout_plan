<script>
    function addFormData(data , url , fn = null , submitBtn = null , redirectUrl = null ){
        form.append("_token" , "{{csrf_token()}}");
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
                if(res.status)
                {
                    if(fn != null){
                            fn();
                        }
                }
            }
        })
    }

</script>