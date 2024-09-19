<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <style>
        /* General reset and container styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            /* padding: 20px; */
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            /* 3 columns */
            grid-gap: 20px;
        }

        .card {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .card.large {
            grid-column: span 2;
            /* Span across 2 columns */
        }

        .card.blue {
            background-color: #007bff;
            color: #ffffff;
        }

        .card .card-title {
            font-size: 24px;
            margin-bottom: 10px;
            color: inherit;
        }

        .card .card-content {
            margin-top: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .card .card-item {
            background-color: transparent;
            border: 1px solid #007bff;
            padding: 5px 15px;
            border-radius: 50px;
            color: #007bff;
            font-size: 14px;
            text-align: center;
        }

        .card.blue .card-item {
            border-color: #ffffff;
            color: #ffffff;
        }

        .card-image {
            width: 100px;
            margin-left: 50px;
            /* position: absolute; */
            float: right;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: 1fr;
                /* 1 column for smaller screens */
            }

            .card.large {
                grid-column: span 1;
                /* Reset span on smaller screens */
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <br><br>
        <center>
            <p style="font-size: 30px;font-weight: 800;">Bitrix24 solutions</p>
        </center>
        <br><br>
        <div class="grid-container">
            <div class="card large">
                <h2 class="card-title">Role</h2>
                <div class="card-content">
                    <div class="card-item">Marketing</div>
                    <div class="card-item">HR</div>
                    <div class="card-item">Project Management</div>
                    <div class="card-item">Customer Service</div>
                </div>
                <br>
                <img src="https://www.bitrix24.com/upload/optimizer/converted/images/content_en/solutions/main_background-img-1.png.webp?1726502871326"
                    alt="Image description" class="card-image" style="align-items: flex-end" />
            </div>
            <div class="card blue">
                <h2 class="card-title">Need</h2>
                <div class="card-content">
                    <div class="card-item">Productivity</div>
                    <div class="card-item">Communication</div>
                    <div class="card-item">Mobility</div>
                    <div class="card-item">Management & Leadership</div>
                </div>
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1204_181)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M21.7504 24.5116L12.0882 14.7534L6.99479 16.0394L-1.74955e-06 8.97506L7.46111 7.09124L7.51325 7.1439L7.53878 7.11811L7.48664 7.06545L9.35192 -0.469835L16.3467 6.5945L15.148 11.4369L24.7561 21.1405C25.2318 20.9744 25.7425 20.8842 26.2741 20.8842C28.8386 20.8842 30.9174 22.9837 30.9174 25.5737C30.9174 28.1636 28.8386 30.2632 26.2741 30.2632C23.7097 30.2632 21.6308 28.1636 21.6308 25.5737C21.6308 25.2084 21.6721 24.8529 21.7504 24.5116V24.5116ZM3.80971 19.7175L7.97111 19.7175C7.392 21.5652 7.07962 23.5328 7.07962 25.574C7.07962 36.2803 15.6734 44.9596 26.2744 44.9596C36.8753 44.9596 45.4691 36.2803 45.4691 25.574C45.4691 14.8676 36.8753 6.18841 26.2744 6.18841C24.1 6.18841 22.01 6.55355 20.0613 7.22644L18.1453 3.62693C20.675 2.67078 23.4142 2.14797 26.2744 2.14797C39.0848 2.14797 49.4698 12.6361 49.4698 25.574C49.4698 38.5118 39.0848 49 26.2744 49C13.4639 49 3.07895 38.5118 3.07895 25.574C3.07895 23.5517 3.33267 21.5893 3.80971 19.7175V19.7175ZM11.9974 21.2151L15.6542 24.9083C15.6409 25.1284 15.6342 25.3504 15.6342 25.5739C15.6342 31.509 20.3981 36.3203 26.2748 36.3203C32.1515 36.3203 36.9154 31.509 36.9154 25.5739C36.9154 19.6388 32.1515 14.8275 26.2748 14.8275C26.144 14.8275 26.0137 14.8298 25.884 14.8346L22.1763 11.0901C23.4785 10.7149 24.8534 10.5141 26.2748 10.5141C34.5102 10.5141 41.1863 17.2566 41.1863 25.5739C41.1863 33.8912 34.5102 40.6337 26.2748 40.6337C18.0394 40.6337 11.3633 33.8912 11.3633 25.5739C11.3633 24.0582 11.585 22.5949 11.9974 21.2151Z"
                            fill="white"></path>
                    </g>
                    <defs>
                        <clipPath id="clip0_1204_181">
                            <rect width="50" height="50" fill="white"></rect>
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <div class="card blue large">
                <h2 class="card-title">Industry</h2>
                <div class="card-content">
                    <div class="card-item">Legal</div>
                    <div class="card-item">Retail</div>
                    <div class="card-item">Travel</div>
                    <div class="card-item">Transportation & Storage</div>
                    <div class="card-item">Restaurant</div>
                    <div class="card-item">Remote Work</div>
                </div>
                <br>
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"
                    style="margin-top: 10px">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12.8372 21.6745C18.2702 21.6745 22.6745 17.2702 22.6745 11.8372C22.6745 6.40428 18.2702 2 12.8372 2C7.40429 2 3 6.40428 3 11.8372C3 17.2702 7.40429 21.6745 12.8372 21.6745ZM34.481 47.2515C41.0005 47.2515 46.2857 41.9664 46.2857 35.4468C46.2857 28.9273 41.0005 23.6421 34.481 23.6421C27.9614 23.6421 22.6763 28.9273 22.6763 35.4468C22.6763 41.9664 27.9614 47.2515 34.481 47.2515ZM42.3499 11.8371C42.3499 16.1834 38.8264 19.7069 34.4801 19.7069C30.1337 19.7069 26.6103 16.1834 26.6103 11.8371C26.6103 7.49071 30.1337 3.96728 34.4801 3.96728C38.8264 3.96728 42.3499 7.49071 42.3499 11.8371ZM12.843 41.3474C16.1027 41.3474 18.7453 38.7048 18.7453 35.445C18.7453 32.1852 16.1027 29.5427 12.843 29.5427C9.58318 29.5427 6.94061 32.1852 6.94061 35.445C6.94061 38.7048 9.58318 41.3474 12.843 41.3474Z"
                        fill="white"></path>
                </svg>
            </div>
            <div class="card">
                <h2 class="card-title">Tool</h2>
                <div class="card-content">
                    <div class="card-item">Telephony</div>
                    <div class="card-item">CRM</div>
                    <div class="card-item">Calendars</div>
                    <div class="card-item">Contact Center</div>
                    <div class="card-item">Tasks & Projects</div>
                    <div class="card-item">Website Builder</div>
                </div>
                <br>
                <img title="" class="solutions__card-img" loading="lazy"
                    src="https://www.bitrix24.com/upload/optimizer/converted/images/content_en/solutions/main_background-img-2.png.webp?1726502871326"
                    alt="Bitrix24" style="width: 120px; position: relative; float: right" />
            </div>
            <div class="card large">
                <h2 class="card-title">Business size</h2>
                {{-- <img src="{{asset('assets\img\bitrix24\role.png')}}" alt="Image description" class="card-image"  style="position: relative; float: right"/> --}}
                <br><br><br>
                <div class="card-content">
                    <div class="card-item">Solo entrepreneur</div>
                    <div class="card-item">Small business</div>
                    <div class="card-item">Enterprise</div>
                </div>
            </div>
            <div class="card">
                <img title="" class="solutions__card-img" loading="lazy"
                    src="{{ asset('assets\img\bitrix24\main_background-img-3.jpg') }}" alt="Bitrix24"
                    style=" width: 100%;
            height: 100%;     
            object-fit: cover; 
            border-radius: 8px;" />
            </div>
        </div>
</body>

</html>
