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
        h22 {
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
            h2 {
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
                <h21>Benefit Services Provid</h21>
            </center>
            <br>
            <div class="services-grid">
                <div class="service-box">
                    <h3>Omnichannel Customer Engagement Strategy</h3>
                    <p>- Develop strategies for engaging customers across multiple channels (WhatsApp, Telegram,
                        Facebook Messenger, etc.).</p>
                    <p>- Analyze customer journeys and recommend effective channels for specific scenarios.</p>
                </div>
                <div class="service-box">
                    <h3>Chatbot Development and Implementation</h3>
                    <p>- Build custom chatbots to automate tasks, answer FAQs, and provide 24/7 support.</p>
                    <p>- Train and manage chatbots for consistent and accurate information delivery.</p>
                </div>
                <div class="service-box">
                    <h3>Advanced Automation and Workflows</h3>
                    <p>- Design complex workflows to streamline customer journeys and improve agent efficiency.</p>
                    <p>- Automate tasks like lead routing, ticket escalation, and personalized messaging.</p>
                </div>
                <div class="service-box">
                    <h3>Data-Driven Reporting and Optimization</h3>
                    <p>- Utilize analytics to measure performance metrics such as response times, customer satisfaction,
                        and agent productivity.
                    </p>
                    <p>- Optimize strategies and workflows based on data insights.</p>
                </div>
            </div>
        </section>
        <br>
        <section class="specialized-services">
            <h21></h21>
            <div class="services-grid">
                <div class="service-box">
                    <h3> Integration with Existing Systems</h3>
                    <p>- Integrate respond.io with CRM, Helpdesk, or other business tools for a unified customer
                        experience.</p>
                </div>
                <div class="service-box">
                    <h3> Respond.io Account Setup and Migration</h3>
                    <p>- Assist in setting up Respond.io accounts and migrating customer data from previous platforms.
                    </p>
                    <p>- Configure advanced features like canned responses, automated triggers, and chat routing rules.
                    </p>
                </div>
                <div class="service-box">
                    <h3> Advanced User Training</h3>
                    <p>- Provide in-depth training on using Respond.io's advanced features and best practices for
                        customer communication.</p>
                </div>
                <div class="service-box">
                    <h3> Ongoing Support and Maintenance</h3>
                    <p>- Offer ongoing technical support and guidance to maximize Respond.io investment.
                    </p>
                    <p>
                        - Provide software updates and monitor performance for optimal functionality.</p>
                </div>
                <div class="service-box">
                    <h3> Industry-Specific Solutions:</h3>
                    <p>- Tailor services to meet the specific needs of various industries (e.g., eCommerce automation,
                        healthcare appointment scheduling).</p>
                </div>
            </div>
        </section>
        <br>
        <section class="core-services">
            <div class="section-title text-center">
                <br>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">Connect to the Tools <br> You Love</h2>
                <p>Powerful apps and integrations to acquire, engage and retain more customers with respond.io.</p>
            </div>
            <center>
                <h21>Messaging Channels</h21>
            </center>
            <br>
            <div class="services-grid">
                <img src="{{ asset('assets\img\respond\image (1).png') }}" alt=""​ width="1200px;">
        </section>
        <br>
        <section class="core-services">
            <center>
                <h21>WebChat</h21>
            </center>
            <br>
            <div class="services-grid">
                <img src="{{ asset('assets\img\respond\image (2).png') }}" alt="" width="1200px;">
        </section>
        <br>
        <section class="core-services">
            <center>
                <h21>SMS & Email</h21>
            </center>
            <br>
            <div class="services-grid">
                <img src="{{ asset('assets\img\respond\image (3).png') }}" alt="" width="1200px;">
        </section>




    </div>
</body>

</html>
