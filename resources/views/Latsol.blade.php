<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .testimonials {
            background-color: #fff;
        }
        .testimonials h2 {
            font-size: 1.5rem;
            font-weight: 500;
            color: #333;
        }
        .testimonial {
            padding: 20px;
            border-radius: 5px;
        }
        .testimonial .testimonial-img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border: 3px solid #ddd;
            border-radius: 50%;
            margin-right: 15px;
        }
        .testimonial-text {
            color: #555;
        }
        .blockquote-footer {
            font-size: 0.9rem;
            color: #888;
        }
        .logos {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 10px;
            background-color: #f1f1f1;
            margin-top: 40px;
        }
        .logos img {
            max-height: 80px;
            opacity: 0.7;
            transition: opacity 0.3s ease-in-out;
        }
        .logos img:hover {
            opacity: 1;
        }
        .logo-caption {
            color: #888;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <section class="testimonials py-5">
        <div class="container text-center">
            <h2 class="mb-5">Our clients love us.</h2>
            <div class="row justify-content-center">
                <!-- Testi 1 -->
                <div class="col-md-5 mb-4">
                    <div class="testimonial p-4 d-flex align-items-center">
                        <img src="{{ asset('https://th.bing.com/th/id/OIP.KeIijA181Ged9wRqNlkO_QHaHN?rs=1&pid=ImgDetMain') }}" alt="Person 1" class="testimonial-img">
                        <div class="testimonial-text">
                            <p>"The best company ever"</p>
                            <footer class="blockquote-footer">Christiano Ronaldo, CEO of Company Christiano Ronaldo</footer>
                        </div>
                    </div>
                </div>
                <!-- Testi 2 -->
                <div class="col-md-5 mb-4">
                    <div class="testimonial p-4 d-flex align-items-center">
                        <img src="{{ asset('https://th.bing.com/th/id/OIP.8vQgcGpVxbFcPqDCfmw2TgHaFj?rs=1&pid=ImgDetMain') }}" alt="Person 2" class="testimonial-img">
                        <div class="testimonial-text">
                            <p>"Thankyou for helping my company"</p>
                            <footer class="blockquote-footer">KSI, CEO of Drink Prime</footer>
                        </div>
                    </div>
                </div>
                <!-- Testi 3 -->
                <div class="col-md-5 mb-4">
                    <div class="testimonial p-4 d-flex align-items-center">
                        <img src="{{ asset('https://th.bing.com/th/id/OIP.MxQjsSx0RSZOk0besWfD3gHaFH?rs=1&pid=ImgDetMain') }}" alt="Person 3" class="testimonial-img">
                        <div class="testimonial-text">
                            <p>"Wow. Thanks for your help"</p>
                            <footer class="blockquote-footer">Elon Musk, CEO of Tesla</footer>
                        </div>
                    </div>
                </div>
                <!-- Testi 4 -->
                <div class="col-md-5 mb-4">
                    <div class="testimonial p-4 d-flex align-items-center">
                        <img src="{{ asset('https://th.bing.com/th/id/OIP.Afk9XWKAozdV1F0NBdd4SgAAAA?rs=1&pid=ImgDetMain') }}" alt="Person 4" class="testimonial-img">
                        <div class="testimonial-text">
                            <p>"Thats a good one"</p>
                            <footer class="blockquote-footer">Mark Zuckerberg, CEO of Facebook</footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="logos bg-light">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-2">
                    <img src="{{ asset('https://logodownload.org/wp-content/uploads/2014/10/paypal-logo-0.png') }}" alt="Logo 1" class="img-fluid">
                </div>
                <div class="col-2">
                    <img src="{{ asset('https://logos-world.net/wp-content/uploads/2020/04/Visa-Symbol.png') }}" alt="Logo 2" class="img-fluid">
                </div>
                <div class="col-2">
                    <img src="{{ asset('https://th.bing.com/th/id/OIP.pL0yAs7O-twbB-41n4VngAHaEc?rs=1&pid=ImgDetMain') }}" alt="Logo 3" class="img-fluid">
                </div>
                <div class="col-2">
                    <img src="{{ asset('https://i0.wp.com/www.agoda.com/wp-content/uploads/2019/09/agoda-grey-logo.png?resize=500%2C268') }}" alt="Logo 4" class="img-fluid">
                </div>
                <div class="col-2">
                    <img src="{{ asset('https://th.bing.com/th/id/OIP.TqUzsY1HLjVbrP6KLC4UcAHaBp?rs=1&pid=ImgDetMain') }}" alt="Logo 5" class="img-fluid">
                </div>
                <div class="col-2">
                    <img src="{{ asset('https://th.bing.com/th/id/OIP.Rc_nmBmFuDIagD5835c0IQHaHa?rs=1&pid=ImgDetMain') }}" alt="Logo 6" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
