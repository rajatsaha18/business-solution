<style>
    @media screen and (min-width: 1366px) {
       .fo1 {
           margin-right: 50px; /* Adjust the value based on your preference */
       }
   
       .fo2 {
           margin-left: 50px; /* Adjust the value based on your preference */
       }
   }
   .text_footer{
    color:#3498db;
   }
   .zong p{
    font-size:14px;
    
   }
   #social{
    font-size:20px;
   }
   #bg_footer{
    background:#2f3640;
   }
   .proshow_new {
    padding-bottom: 0px;
}
.col-md-5 .list-inline-item {
    margin-right: 20px; /* Adjust the spacing as needed */
}
#bg_footer .socail_link {
    margin-top: 20px; /* Adjust margin as needed */
}
#bg_footer .all_rights {
    margin-top: 20px; /* Adjust margin as needed */
}
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}
.container {
    max-width: 500px;
    margin: 50px auto;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.form-group input[type="text"],
.form-group input[type="email"],
.form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.form-group textarea {
    height: 100px;
}

.btn {
    background: #007bff;
    color: #fff;
    padding: 6px 12px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.btn:hover {
    background: #0056b3;
}
       
    </style>
    <footer class="text-center py-5" id="bg_footer">
        <div class="zong">
            <div class="row">
                <div class="col-md-4 mx-auto mt-3">
                    <h4 class="text-uppercase mb-4 text_footer"><i class="fa-solid fa-address-card"></i> About Us</h4>
                    <p class="text-white text-center">
                        {{ $sitesetting->about_us ??'' }}
                    </p>
                    

                </div>
                <div class="col-md-4">
                    <div class="container">
                        <h2>Contact Us</h2>
                        <form action="{{route('contact.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email">
                                <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                            </div>
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea id="message" name="message"></textarea>
                            </div>
                            <button type="submit" class="btn">Submit</button>
                        </form>
                    </div>
                    

                </div>
                
                {{-- <div class="col-md-4 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 text-warning">Contact</h5>
                    <p class="text-white">
                        <i class="fas fa-home"></i>Banglamotor, Dhaka
                    </p>
                    <p class="text-white">
                        rajat@gmail.com
                    </p>
                    <p class="text-white">
                        0121365412
                    </p>

                </div> --}}
                <div class="col-md-4 mx-auto mt-3">
                    <h4 class="text-uppercase mb-4 text_footer"><i class="fa-regular fa-building"></i> Head Office:</h4>
                    <p class="text-center text-white">{{ $sitesetting->address ??'' }}</p>
                    
                    <h4 class="text-uppercase mb-4 mt-3 text_footer"><i class="fa-solid fa-envelope"></i> Email:</h4>
                    <p class="text-center text-white">{{ $sitesetting->email ??'' }}</p>

                </div>
            </div>
            <hr class="mb-4 text-white">
            <div class="row">
                <div class="col-md-7 all_rights d-flex justify-content-start">
                    <p class="text-white">@2024 Empex All rights reserved Powered by:
                        <a href="#" style="text-decoration: none;">
                            <strong class="text-warning" >Sara Software</strong>
                        </a>
                    </p>
                </div>
                <div class="col-md-5 socail_link d-flex justify-content-end">
                    <div class="text-center">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item" id="social">
                                <a href="{{ isset($sitesetting->facebook) ? $sitesetting->facebook : '' }}" class="text-primary"><i class="fa-brands fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item" id="social">
                                <a href="{{ isset($sitesetting->twitter) ? $sitesetting->twitter : '' }}" class="text-primary"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item" id="social">
                                <a href="{{ isset($sitesetting->linkedin) ? $sitesetting->linkedin : '' }}" class="text-primary"><i class="fa-brands fa-linkedin"></i></a>
                            </li>
                            <li class="list-inline-item" id="social">
                                <a href="{{ isset($sitesetting->google) ? $sitesetting->google : '' }}" class="text-danger"><i class="fa-brands fa-google"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>