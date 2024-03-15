
@extends('layouts.main')

@section('stylesheets')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
<link
    href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">
 
@endsection


@section('content')

@if(session('toastr'))
{!! session('toastr') !!}
@endif

<section class="main-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-7 col-xl-7">
                <div class="back-bar">
                    <a class="back" href="#">
                        <img src="{{ URL::asset('build/images/back.svg') }}" alt="">
                        <svg width="167" height="30" viewBox="0 0 167 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M53.9259 9.72623V5.32831H37.272V9.72623H42.958V24.3506H48.2399V9.72623H53.9259Z" fill="#31746C"/>
                            <path d="M66.5117 17.3563C66.5117 13.0114 63.5474 10.0441 59.2088 10.0441C54.8701 10.0441 51.8789 13.0114 51.8789 17.3563C51.8789 21.7013 54.8701 24.6685 59.2088 24.6685C63.5474 24.6685 66.5117 21.7013 66.5117 17.3563ZM56.9182 17.3563C56.9182 15.2104 57.8075 14.0976 59.2088 14.0976C60.5832 14.0976 61.4724 15.2104 61.4724 17.3563C61.4724 19.5288 60.5832 20.615 59.2088 20.615C57.8075 20.615 56.9182 19.5288 56.9182 17.3563Z" fill="#31746C"/>
                            <path d="M82.6797 22.4961V10.3621H77.5595V11.6602C76.9128 10.733 75.4576 10.0441 73.8137 10.0441C69.9332 10.0441 67.7773 13.1439 67.7773 16.9589C67.7773 20.774 69.9332 23.8208 73.8137 23.8208C75.4576 23.8208 76.9128 23.1584 77.5595 22.2576V23.1054C77.5595 24.8275 76.4546 25.5428 75.0264 25.5428C73.8676 25.5428 72.9783 25.0395 72.7089 24.0857L67.8043 24.9865C68.4511 27.7418 71.065 29.2519 74.8108 29.2519C79.4189 29.2519 82.6797 26.947 82.6797 22.4961ZM77.5595 16.6675V17.1974C77.5595 18.893 76.6163 19.7937 75.2959 19.7937C73.7868 19.7937 73.0053 18.6015 73.0053 16.9324C73.0053 15.2633 73.7868 14.0976 75.2959 14.0976C76.6163 14.0976 77.5595 14.9719 77.5595 16.6675Z" fill="#31746C"/>
                            <path d="M91.8708 24.6685C94.7004 24.6685 97.5569 23.2644 98.6078 20.4296L94.4039 19.1844C94.0266 20.2706 93.1374 20.774 91.9516 20.774C90.6312 20.774 89.688 19.9527 89.3916 18.4426H98.7426V17.3034C98.7426 13.1969 96.2903 10.0441 91.8169 10.0441C87.586 10.0441 84.4331 13.1439 84.4331 17.3298C84.4331 21.6748 87.3974 24.6685 91.8708 24.6685ZM91.763 13.7797C93.0026 13.7797 93.7302 14.654 93.7841 15.6608H89.4994C89.8497 14.3891 90.6851 13.7797 91.763 13.7797Z" fill="#31746C"/>
                            <path d="M101.149 20.4296C101.149 23.3174 102.739 24.4831 106.081 24.4831C107.24 24.4831 108.075 24.4037 108.911 24.2712V20.1912C108.425 20.2442 108.237 20.2707 107.752 20.2707C106.728 20.2707 106.189 20.0322 106.189 18.9195V14.4421H108.83V10.3621H106.189V6.65302H101.149V10.3621H99.4248V14.4421H101.149V20.4296Z" fill="#31746C"/>
                            <path d="M110.793 24.3506H115.913V16.5351C115.913 15.1574 116.829 14.4951 117.799 14.4951C118.931 14.4951 119.443 15.3429 119.443 16.5086V24.3506H124.563V15.1044C124.563 12.0312 122.677 10.0442 119.794 10.0442C118.042 10.0442 116.668 10.839 115.913 11.6603V5.32831H110.793V24.3506Z" fill="#31746C"/>
                            <path d="M133.716 24.6685C136.545 24.6685 139.402 23.2644 140.453 20.4296L136.249 19.1844C135.871 20.2706 134.982 20.774 133.796 20.774C132.476 20.774 131.533 19.9527 131.236 18.4426H140.587V17.3034C140.587 13.1969 138.135 10.0441 133.662 10.0441C129.431 10.0441 126.278 13.1439 126.278 17.3298C126.278 21.6748 129.242 24.6685 133.716 24.6685ZM133.608 13.7797C134.847 13.7797 135.575 14.654 135.629 15.6608H131.344C131.694 14.3891 132.53 13.7797 133.608 13.7797Z" fill="#31746C"/>
                            <path d="M151.914 10.3356C151.618 10.3091 151.375 10.2826 150.971 10.2826C149.435 10.2826 148.142 10.9979 147.468 12.0047V10.3621H142.348V24.3506H147.468V17.8332C147.468 15.9522 148.869 14.9719 150.621 14.9719C151.079 14.9719 151.402 14.9984 151.914 15.0779V10.3356Z" fill="#31746C"/>
                            <path d="M160.006 24.6685C162.836 24.6685 165.692 23.2644 166.743 20.4296L162.539 19.1844C162.162 20.2706 161.273 20.774 160.087 20.774C158.766 20.774 157.823 19.9527 157.527 18.4426H166.878V17.3034C166.878 13.1969 164.426 10.0441 159.952 10.0441C155.721 10.0441 152.568 13.1439 152.568 17.3298C152.568 21.6748 155.533 24.6685 160.006 24.6685ZM159.898 13.7797C161.138 13.7797 161.865 14.654 161.919 15.6608H157.635C157.985 14.3891 158.82 13.7797 159.898 13.7797Z" fill="#31746C"/>
                            <path d="M20.9893 0.584412V7.20748H14.2526V13.8318H7.5159V20.4549H0.777832V27.0779H27.726V20.4549V13.8318V7.20748V0.584412H20.9893Z" fill="#FFBA00"/>
                            <path d="M7.31672 13.4416C10.9281 13.4416 13.8556 10.5634 13.8556 7.01298C13.8556 3.46258 10.9281 0.584412 7.31672 0.584412C3.70539 0.584412 0.777832 3.46258 0.777832 7.01298C0.777832 10.5634 3.70539 13.4416 7.31672 13.4416Z" fill="#009988"/>
                        </svg>
                    </a>
                    <h4>Subscribe to Togethere Professional</h4>
                    <h3>$20.00 <span>Per Month</span> </h3>
                    <div class="total-card">
                        <img src="{{ URL::asset('build/images/wallet.svg') }}" alt="">
                        <div class="content">
                            <div class="heading">
                                <h3>Together Professional</h3>
                                <span>$20.00</span>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur. Fames tristique quisque feugiat lobortis vel
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-5 col-xl-5">
                <div class="payment-side">
                    {{-- <button class="btn btn-apple-pay">
                        <img src="{{ URL::asset('build/images/apple.svg') }}" alt="">
                        Pay
                    </button>
                    <div class="seperator">
                        <span>or pay another way</span>
                    </div> --}}
                    <form id="add-subscription" action="{{route('addSubscription')}}" method="POST">
                        {{-- <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email"  class="form-control" placeholder="Email address">
                        </div>
                        <div class="card-check mb-3 row">
                            <div class="col-lg-6 col-md-6 px-sm-2 px-md-2 px-md-0 px-xs-0 my-2 col-sm-6">
                                <div class="pay-option svg1" id="check-bank">
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M0 10.9971V18C0 19.6569 1.34315 21 3 21H21C22.6569 21 24 19.6569 24 18V10.9971C23.9725 10.999 23.9447 11 23.9167 11H0.0833334C0.055294 11 0.0275035 10.999 0 10.9971Z" fill="#979797"></path> <path d="M24 9.00291V6C24 4.34315 22.6569 3 21 3H3C1.34315 3 0 4.34315 0 6V9.00291C0.0275035 9.00098 0.055294 9 0.0833334 9H23.9167C23.9447 9 23.9725 9.00098 24 9.00291Z" fill="#979797"></path> </g></svg>
                                    <span>Card</span>
                                    <img src="{{ URL::asset('build/images/check.svg') }}" class="check-check" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 px-sm-2 px-md-2 px-md-0 px-xs-0 my-2 col-sm-6">
                                <div class="pay-option svg2" id="check-card">
                                    <svg viewBox="0 0 45 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.6092 8.34165L12.0001 3.64575L3.39093 8.34165L3.75007 9.75007H5.25007V15.7501H4.50007V17.2501H19.5001V15.7501H18.7501V9.75007H20.2501L20.6092 8.34165ZM6.75007 15.7501V9.75007H9.00007V15.7501H6.75007ZM10.5001 15.7501V9.75007H13.5001V15.7501H10.5001ZM15.0001 15.7501V9.75007H17.2501V15.7501H15.0001ZM12.0001 5.35438L17.3088 8.25007H6.69131L12.0001 5.35438ZM3 19.5001H21V18.0001H3V19.5001Z" fill="#979797"></path> 
                                        </g>
                                    </svg>                                
                                    <span>US Bank Account</span>
                                    <img src="{{ URL::asset('build/images/check.svg') }}" class="check-check" alt="">
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="mb-3">
                            <label class="form-label">Card Information</label>
                            <input type="text" class="form-control" placeholder="1234 1234 1234 1234">
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" placeholder="MM / YY">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" placeholder="CVC">
                            </div>
                        </div> --}}
                        


                        {{-- <div class="mb-3">
                            <label class="form-label">Cardholder Name</label>
                            <input type="text" class="form-control" placeholder="Full name on card">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Country</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>United State</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Zip Code</label>
                            <input type="text" class="form-control" placeholder="Full name on card">
                        </div>--}}
                        <div class="mb-4">
                            <div id="card-element">

                            </div>
                        </div> 
                        <button type="submit" class="btn btn-subscribe">Subscribe<i class="fas fa-spinner fa-spin mx-2 d-none text-white loader"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <script>
    const div1 = document.getElementById('check-card');
    const div2 = document.getElementById('check-bank');
  
    div1.addEventListener('click', function() {
      div1.classList.add('checked');
      div2.classList.remove('checked');
    });
  
    div2.addEventListener('click', function() {
      div2.classList.add('checked');
      div1.classList.remove('checked');
    });
  </script> --}}
@endsection


@section('script')
<script src="https://js.stripe.com/v3/"></script>
<script>
    var stripe = Stripe('{{env("STRIPE_KEY")}}')
    var card = null;
    
    createCardElements()
    
    function createCardElements(){
        const element = stripe.elements();
        card = element.create('card')
        card.mount("#card-element");
    }


    document.querySelector("#add-subscription").addEventListener("submit" , async function(e){
        e.preventDefault();

        let loader = this.querySelector(".loader"); 
        loader.classList.remove("d-none");
        let clientSecret = await getSetupIntent().then(data =>{
            return data;
        })

        if(clientSecret != null){
            const { setupIntent, error} = await stripe.confirmCardSetup( clientSecret , {
                                                                            payment_method : {
                                                                                card : card,
                                                                            }
                                                                    });
    
            if(error){
                Swal.fire({
                            icon: "error",
                            title: error,
                        });
                return;
            }else{ 
                
                let url = '{{route("addSubscription")}}';
                let form = new FormData;
                form.append("payment_method" , setupIntent.payment_method);
                addFormData( form , url , null , null , loader , null )
            }

        }else{
            Swal.fire({
                            icon: "error",
                            title: "Something Went Wrong",
                        });
                return;
        }

    })

    async function getSetupIntent()
    {
        let clientSecret = null;
        
        await $.ajax({
            url : '{{route("createSetupIntent")}}',
            type : 'POST',
            data : {
                '_token' : '{{csrf_token()}}'
            },
            success:function(res)
            {
                if(res.status){
                    clientSecret = res.clientSecret;        
                }else{
                    Swal.fire({
                                    icon: "error",
                                    title: res.error,
                                    text: res.msg,
                                });
                }
            }

        })
        return clientSecret;
    } 


</script>
@endsection