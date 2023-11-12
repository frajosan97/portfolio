<?php

class App
{
    private $controller = 'Home';
    private $method = 'index';
    private function splitUrl()
    {
        $URL = $_GET['url'] ?? 'Home';
        $URL = explode("/", trim($URL, "/"));

        return $URL;
    }

    public function loadController()
    {
        $URL = $this->splitUrl();
        /** select controller */
        $fileName = "../app/controllers/" . ucfirst($URL[0]) . ".php";
        if (file_exists($fileName)) {
            require $fileName;
            $this->controller = ucfirst($URL[0]);
            unset($URL[0]);
        } else {
            $fileName = "../app/controllers/_404.php";
            require $fileName;
            $this->controller = "_404";
        }
        $controller = new $this->controller;
        /** select method */
        if (!empty($URL[1])) {
            if (method_exists($controller, $URL[1])) {
                $this->method = $URL[1];
                unset($URL[1]);
            }
        }

        /**call user function */
        call_user_func_array([$controller, $this->method], $URL);
    }

    public function appInfo()
    {
        $appInfo = array(
            "appName" => "francis kioko - portfolio",
            "myName" => "francis kioko",
            "typed" => "Designer, Developer, Database administrator, Freelancer",
            "tagline" => "",
            "metakey" => "",
            "metadesc" => ""
        );

        return (object) $appInfo;
    }

    public function facts()
    {
        return [
            "happy clients" => [
                "icon" => "bi bi-emoji-smile",
                "count" => "1000",
            ],
            "projects" => [
                "icon" => "bi bi-journal-richtext",
                "count" => "22",
            ],
            "hours of support" => [
                "icon" => "bi bi-headset",
                "count" => "1456",
            ],
            "hard workers" => [
                "icon" => "bi bi-people",
                "count" => "16",
            ]
        ];
    }

    public function skills()
    {
        return [
            "technical skills" => [
                "<b>Front-end technology:</b> Expertise in front-end technologies including HTML5, CSS3, XML JavaScript, and third-party libraries i.e. ReactJs, React Native and Bootstrap",
                "<b>Back-end technology:</b> Knowledge of server-side programming languages including PHP, NodeJS and Python.",
                "<b>Frameworks:</b> Laravel, CodeIgniter, Django and ExpressJS",
                "<b>Database Management:</b> Familiarity with DBMS technology, including SQLServer, MYSQL, SQL, NoSQL, MongoDB and SQLite",
                "<b>Content Management Systems:</b> WordPress, moodle, droople and joomla",
                "<b>Tools and technologies:</b> Jira, Scrum, Agile, SOAPUI, Postman, Adobe Creative Suite, SSMS, MYSQL Workbench, XAMPP, Laragon, Git & Github.",
                "<b>API integrations:</b> M-Pesa Express payments, Bank Payments etc.",
                "<b>Graphic Designer:</b> Using AutoCAD, Photoshop among others",
            ],
            "key skills and competencies" => [
                "<b>Database Administration:</b> Practical experience in Database Administration (DBA) that include MS SQL Server, MYSQL and SQ",
                "<b>Project Management skills:</b> Possesses necessary traits and competencies for a successful project management.",
                "<b>Research and Planning:</b>  Identifying problems, gathering information, developing evaluations and calculating results",
                "<b>Technical Expertise:</b> Experienced in providing technical expertise for IT network design, implementation, optimization and upgrade. Implementation, optimization and upgrade.",
                "<b>System Administration:</b> Skilled in handling the upkeep, configuration and reliable operation of computer systems; especially multi-user computers, such as servers.",
                "<b>Complex Problem Solving:</b> I have the ability to visualize and solve complicated problems in the best way and making accurate and informed decisions in relation to IT.",
                "<b>Communications skills:</b> Excellent communication skills with the ability to engage with people from all backgrounds and creating a professional relationship with both my colleagues and superiors.",
                "<b>Team Collaboration & Leadership:</b> I am a team player and fast learner with positive attitude that promote team work with other employees of the company",
            ]
        ];
    }

    public function skillsMeasure()
    {
        return [
            "HTML" => "100",
            "CSS" => "96",
            "JAVA SCRIPT" => "80",
            "PHP" => "95",
            "FRONT-END FRAMEWORKS" => "100",
            "BACKEND FRAMEWORKS" => "90",
            "WORDPRESS/CMS" => "90",
        ];
    }

    public function education()
    {
        return [
            "bachelor of business managent (Administraton and Management with IT)" => [
                "period" => "2016 - 2020",
                "school" => "kirinyaga university",
                "achievement" => "graduated with second class honors upper division"
            ],
            "certifications & trainings" => [
                "period" => "From 2018 to current",
                "school" => "",
                "achievement" => [
                    "Cloud Application Development Foundation",
                    "Certified Secure Web Application Engineer (CSWAE)",
                    "Website Hacking Penetration Testing & Bug Bounty Hunting",
                    "SQL Server Database Administration (DBA)",
                    "MS Windows Server Administratio",
                    "Information Systems Auditing, Controls and Assurance",
                    "Cisco CCNA 200-301",
                    "Cisco Networking Essentials",
                    "Cisco Cybersecurity Essentials",
                    "Effective Customer Complaints Management",
                    "Google Digital Marketing Fundamental",
                ]
            ]
        ];
    }

    public function experience()
    {
        return [
            "ICT MANAGER AND SENIOR SOFTWARE ENGINEER" => [
                "period" => "2020 – January 2022",
                "organization" => "Hencan Enterprises Limited – IT Company in Kenya",
                "duties" => [
                    "Working as senior software / website and mobile app design and development",
                    "Manage IT staff by recruiting, training and coaching employees, communicating job expectations and appraising their performance",
                    "Database administration",
                    "Manage information technology and computer systems",
                    "Planning, organizing, controlling and evaluating IT and electronic data operations",
                    "Website hosting and management",
                    "Ensure security of data, network access and backup systems",
                    "Configuration, Maintenance and Troubleshooting of desktop devices. Installation and maintenance of software application system.",
                    "Provision of end user technical support, which includes trainings and championing successful implementation of IT systems.",
                    "Provided advice and guidance to the management on all IT matters that contributed to the efficient running of the health facility",
                    "Configuration and setup of IT equipment such as computers, printers, hardware systems and software applications",
                    "Established, repaired and optimized networks by installing wiring, cabling and devices.",
                    "Set up hardware and software in optimal configurations to meet network performance requirements."
                ]
            ],
            "ICT OFFICER " => [
                "period" => "February 2022 – September 2022",
                "organization" => "Idepended Electoral and Boundaries Commision (IEBC)",
                "duties" => [
                    "Acted as Constituency Human Resource Officer",
                    "Management And Maintenance Of All ICT Equipment",
                    "Controlling And Managing The Voter Verification Data",
                    "Management and Controlling All ICT Equipment and Components Used During the General Elections 2022.",
                    "Managing Elections From The Office At The Constituency Level",
                    "Support Of All Electoral Systems",
                    "Technical support to all Election Officials",
                    "Providing High-level support to the Returning Officer in transmission and manipulation of election information.",
                ]
            ]
        ];
    }

    public function portfolio()
    {
        return [
            "katheka boys" => [
                "filter" => "web",
                "link" => "https://www.kathekaboys.sc.ke/",
                "image" => "katheka.png",
            ],
            "ilika mixed secondary school" => [
                "filter" => "web",
                "link" => "https://www.ilikasec.sc.ke/",
                "image" => "ilika.png",
            ],
            "kst. pauls waita secondary" => [
                "filter" => "web",
                "link" => "https://www.waitasec.sc.ke/",
                "image" => "waita.png",
            ],
            "hencan group enterprises ltd" => [
                "filter" => "web",
                "link" => "https://hencangroup.co.ke/",
                "image" => "hencangroup.png",
            ],
            "hencan bulky sms" => [
                "filter" => "web",
                "link" => "https://hencansms.co.ke/",
                "image" => "hencansms.png",
            ],
            "cicenry" => [
                "filter" => "web",
                "link" => "https://cicenrygroup.com/",
                "image" => "cicenry.png",
            ],
        ];
    }

    public function services()
    {
        return [
            "Design" => [
                "icon" => "bi bi-briefcase",
                "desc" => "I come up with a perfect UI/UX design, my designs are attractive and user friendly"
            ],
            "Web Development" => [
                "icon" => "bi bi-card-checklist",
                "desc" => "I am excellent in both Front-end and Back-end development. I take at most 3-4 weeks to complete and put it running any complex website"
            ],
            "Database administration" => [
                "icon" => "bi bi-bar-chart",
                "desc" => "Proffessionaly, i focus also on database administration, ensuring security of your organizations data. I mantain privacy for your data."
            ],
            "Networking" => [
                "icon" => "bi bi-binoculars",
                "desc" => "I have been performing important tasks in Network both <b>(WAN & LAN)</b> installation and management. 
                I have managed to provide the network in a couple of institutions including:- 1. Secondary schools 2. IT companies 3. Lending Saccos 4. Supermarkets"
            ],
            "Bridging Payments Enhancement" => [
                "icon" => "bi bi-brightness-high",
                "desc" => "I am excellent in developing all funds transfer / payments APIs including MPESA, PAYPAL, BANKS etc"
            ],
            "CCTV & Biometric verificatiion Installation" => [
                "icon" => "bi bi-calendar4-week",
                "desc" => "I have managed the installation and management of these in a couple of institutions including:- 1. Secondary schools 2. IT companies 3. Lending Saccos 4. Supermarkets"
            ]
        ];
    }

    public function testimonies()
    {
        return [
            "Henry charles maithya" => [
                "photo" => "avatar.png",
                "title" => "CEO Hencan",
                "testimony" => "I met you francis when you was in practice of this great work you are doing today, I congratulate your effort and for the good work you are doing"
            ],
            "fredrick ndambuki" => [
                "photo" => "avatar.png",
                "title" => "principal waita secondary",
                "testimony" => "Thankyou francis kioko for enhancing easy management of my school, transform this to other schools as well"
            ],
            "michael muthui" => [
                "photo" => "avatar.png",
                "title" => "principal katheka secondary",
                "testimony" => "You are one of the best people i have ever met, you does everything from the bottom of your heart. Thankyou sir"
            ],
            "elijah wambua" => [
                "photo" => "avatar.png",
                "title" => "principal ilika secondary",
                "testimony" => "May God bless you for the good work you are doing to my school Francis"
            ],
        ];
    }
}

$app = new App;
