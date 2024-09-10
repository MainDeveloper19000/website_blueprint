<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitrix24 Services</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            /* padding: 20px; */
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        h12 {
            text-align: left;
            margin-bottom: 20px;
            font-size: 1.8em;
            color: #0078d4;
        }

        h21 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.8em;
            color: #0078d4;
            font-weight: 700;

        }

        h3 {
            text-align: left;
            margin-bottom: 20px;
            font-size: 1.8em;
            color: #ffffff;
        }


        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .service-box {
            background-color: #007ca9;
            color: white;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .service-box h3 {
            font-size: 1.3em;
            margin-bottom: 10px;
        }

        .service-box p {
            font-size: 1em;
            line-height: 1.5;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .services-grid {
                grid-template-columns: 1fr;
            }

            h12 {
                font-size: 1.5em;
            }

            .service-box {
                padding: 15px;
            }

            .service-box h3 {
                font-size: 1.2em;
            }
        }


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .stats-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right, #00aaff, #00ccee);
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            color: white;
        }

        .stat-item {
            display: flex;
            align-items: center;
            margin: 0 20px;
        }

        .icon {
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }

        .stat-number {
            font-size: 1.5em;
            font-weight: bold;
            margin-right: 5px;
        }

        .stat-text {
            font-size: 1.2em;
        }

        @media (max-width: 768px) {
            .stats-bar {
                flex-direction: column;
                text-align: center;
            }

            .stat-item {
                margin: 10px 0;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <section class="core-services">
            <center>
                <h21>What we can help you?</h21>
            </center>
            <br>
            <div class="services-grid">
                <div class="service-box">
                    <h3>Bitrix24 Implementation and Setup</h3>
                    <p>- Set up Bitrix24 accounts tailored to business needs. </p>
                    <p>- Configure CRM, project management, HR, and communication tools.</p>
                </div>
                <div class="service-box">
                    <h3>User Training and Adoption</h3>
                    <p>- Provide comprehensive training for effective Bitrix24 use.</p>
                </div>
                <div class="service-box">
                    <h3>Customization and Development</h3>
                    <p>- Customize Bitrix24 to fit unique business processes. </p>
                    <p>- Develop custom applications and integrations.</p>
                </div>
                <div class="service-box">
                    <h3>Support and Maintenance</h3>
                    <p>- Offer technical support and troubleshooting.</p>
                    <p>- Provide ongoing maintenance and updates.</p>
                </div>
            </div>
        </section>
        <br>
        <section class="specialized-services">
            <h12></h12>
            <div class="services-grid">
                <div class="service-box">
                    <h3>CRM Implementation and Optimization</h3>
                    <p>- Implement robust CRM systems within Bitrix24.</p>
                    <p>- Optimize sales pipelines and customer relationship management. </p>
                </div>
                <div class="service-box">
                    <h3>Project Management Consulting</h3>
                    <p>- Adopt project management methodologies within Bitrix24.</p>
                    <p>- Implement task management, time tracking, and collaboration tools.</p>
                </div>
                <div class="service-box">
                    <h3>HR Management Solutions</h3>
                    <p>- Set up HR modules for employee management and document management.</p>
                    <p>- Implement HR workflows and automation.</p>
                </div>
                <div class="service-box">
                    <h3>Intranet Development</h3>
                    <p>- Create custom intranets for internal communication and collaboration.</p>
                    <p>- Design employee directories, knowledge bases, and social features.</p>
                </div>
                {{-- <div class="service-box">
                        <h3>Marketing Automation</h3>
                        <p>Setting up marketing automation solutions in Bitrix24.</p>
                    </div> --}}
            </div>
        </section>
        <br>
        <section class="additional-services">
            <h12> </h12>
            <div class="services-grid">
                <div class="service-box">
                    <h3>Bitrix24 Licensing</h3>
                    <p>Offering licensing options and pricing for various Bitrix24 packages.</p>
                </div>
                <div class="service-box">
                    <h3>App Development</h3>
                    <p>- Create and sell custom-built Bitrix24 apps</p>
                </div>
                <div class="service-box">
                    <h3>Web Development</h3>
                    <p>Building and scaling websites and web applications tailored to client needs.</p>
                </div>
                <div class="service-box">
                    <h3>Consulting Services</h3>
                    <p>- Offer consulting on business process optimization, digital transformation, and IT strategy.</p>
                </div>
            </div>
        </section>
        <br>
        <div class="stats-bar">
            <div class="stat-item">
                <img src="{{ asset('assets\img\bitrix24\cloud1.png') }}" alt="Cloud Icon" class="icon">
                <span class="stat-number">15,000,000</span>
                <span class="stat-text">organizations have chosen Bitrix24</span>
            </div>
            <div class="stat-item">
                <img src="{{ asset('assets\img\bitrix24\globe-icon.png') }}" alt="Globe Icon" class="icon">
                <span class="stat-text">available in <span class="stat-number">18</span> languages</span>
            </div>
        </div>
        <div class="swiper-slide" style="background-color: rgb(255, 255, 255);overflow: hidden">
            <section class="feature-hosting-section fix section-padding">
                <div class="container">
                    <div class="feature-content-warpper margin-top-60">
                        <div class="row g-4 justify-content-between align-items-center">
                            <div class="col-lg-6">
                                <div class="feature-hosting-content">
                                    <div class="section-title">
                                        {{-- <span class="wow fadeInUp">CRM</span> --}}
                                        <h12 class="wow fadeInUp" data-wow-delay=".3s"><b>What makes Bitrix24 better <br>
                                            than 99% of other solutions <br>on the market?</b>
                                        </h12>
                                    </div>

                                    <div class="list-items">
                                        <ul class="wow fadeInUp" data-wow-delay=".3s">
                                            <li>
                                                <i class="far fa-check"></i>
                                                Replaces all your current SaaS solutions
                                            </li>
                                            <li>
                                                <i class="far fa-check"></i>
                                                Free forever for unlimited users
                                            </li>
                                            <li>
                                                <i class="far fa-check"></i>
                                                Easy to migrate your data from other systems or CRMs
                                            </li>
                                            <li><i class="far fa-check"></i>
                                                Integrated with all your favorite services and apps
                                            </li>
                                            <li><i class="far fa-check"></i>
                                                Used, loved, and trusted by 15,000,000 + users worldwide
                                            </li>
                                            <li><i class="far fa-check"></i>
                                                100% flat fee: predictable costs, no per-user pricing
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                                <div class="feature-hosting-image">
                                    <img src="https://www.bitrix24.com/upload/optimizer/converted/images/content_en/solutions/why-img.jpg.webp?1725521592525"
                                        alt="bitrix24crm">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

</html>
