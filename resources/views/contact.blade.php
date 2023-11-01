@extends('index')

@section('main')
    <div class="bg-black">
        <div class="bg-arangapi1">
            <div class="container p-3 pt-5">
                <div class="row mb-5">
                    <div class="col-lg-6 col-sm-8">
                        <h1 class="warnagradient3">CONTACT</h1>
                        <p class="warnagradient1">Get in Touch: Send Questions, Comments, or Suggestions</p>
                        <div class="d-flex" style="align-items: center">
                            <img src="images/logocontact1.png" alt="" style="width: 25px">
                            <h6 class="warnaputih1 px-1">goldencubeid@gmail.com</h6>
                        </div>
                        <div class="d-flex mt-2" style="align-items: center">
                            <img src="images/logocontact2.png" alt="" style="width: 25px">
                            <h6 class="warnaputih1 px-1">(+62) 821-2285-9318</h6>
                        </div>
                        <div class="d-flex mt-2" style="align-items: center">
                            <img src="images/logocontact3.png" alt="" style="width: 25px">
                            <h6 class="warnaputih1 px-1">instagram.com/goldencube.charcoal</h6>
                        </div>
                        <div class="d-flex mt-2" style="align-items: center">
                            <img src="images/logocontact4.png" alt="" style="width: 25px">
                            <h6 class="warnaputih1 px-1">facebook.com/goldencube.charcoal</h6>
                        </div>
                        <div class="d-flex mt-2" style="align-items: center">
                            <img src="images/logocontact5.png" alt="" style="width: 25px">
                            <h6 class="warnaputih1 px-1">linked.in/goldencube.charcoal</h6>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-3">
                        <div class="border-gradient1 p-3">
                            <form>
                                <div class="form-group">
                                    <label for="name" class="warnaputih1" style="font-weight: bold">Name</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
                                        placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="warnaputih1 mt-3" style="font-weight: bold">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <label for="phonenumber" class="warnaputih1 mt-3" style="font-weight: bold">Phone
                                        Number</label>
                                    <input type="number" class="form-control" id="phonenumber"
                                        placeholder="Enter Phone Number">
                                </div>
                                <div class="form-group">
                                    <label for="message" class="warnaputih1 mt-3" style="font-weight: bold">Message</label>
                                    <textarea type="text" class="form-control" style="height:120px" id="message"></textarea>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn-grad3 rounded-pill mt-4" style="width: 25%">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
