<?php 
	function getSiteConfig() {
		return [
			'site_name'    => 'Quality Clix',
			'logo_url' => 'images/logo.png',
			'site_phone'   => '(+92)-307-5168860',
			'site_address' => 'Office # 18, 4th floor Mall of sargodha, Sargodha, Pakistan',
			'site_email'   => 'info@qualityclix.com',
			'social_links' => [
				'facebook' => 'https://www.facebook.com/yourpage',
				'twitter'  => 'https://twitter.com/yourprofile',
				'youtube'  => 'https://youtube.com/yourchannel',
				'linkedin' => 'https://linkedin.com/in/yourprofile',
				'email'    => 'mailto:info@qualityclix.com',
			],
		];
	}
	function getServices() {
		return [
			[
				'icon' => 'fa-cogs',
				'title' => 'DEDICATED DEVELOPMENT SERVICES',
				'desc' => 'You can hire dedicated development teams with QualityClix who work practically as an extension to your office wherever you are in the world. With more than a decade of experience, we know what it takes to accomplish your work to your full satisfaction. You will be given seamless and regular updates and you won’t ever feel us offshore.',
			],
			[
				'icon' => 'fa-code',
				'title' => 'ONGOING/REGULAR WEB DEVELOPMENT',
				'desc' => 'QualityClix specializes in providing ongoing development services to its clients. If you work with us once, you won’t have to look for a provider again. You can trust us for maintaining your product/website for long term.',
			],
			[
				'icon' => 'fa-desktop',
				'title' => 'CUSTOM WEB/SOFTWARE DEVELOPMENT',
				'desc' => 'We aren’t just coders. We got a team who know how to think out of the box so we over the years have developed in to a bunch of PROBLEM SOLVERS. We review your business and deliver you the solution which is best suited to your needs.',
			],
			[
				'icon' => 'fa-database',
				'title' => 'WEBSITE DESIGN AND DEVELOPMENT',
				'desc' => 'QualityClix core strength is to design and develop websites and web portals for small to medium sized enterprises. We review every clients business and listen to his vision and then develop a solution which is best for our clients business goal.',
			],
			[
				'icon' => 'fa-paint-brush',
				'title' => 'GRAPHIC DESIGN',
				'desc' => 'We are not orthodox designers but rather we use our creativity to give our clients vision a good shape in the design form. And we don’t stop till you Love what you see!',
			],
			[
				'icon' => 'fa-mobile',
				'title' => 'ANDROID/IPHONE APPS',
				'desc' => 'We have a full scale division for Mobile app development. We do not just build apps. We do your website, software and app solutions all together and make them a punch to add value to your business.',
			],
		];
	}	
	function getTestimonials() {
		return [
			[
				'name' => 'John Doe',
				'feedback' => 'This service was amazing! The team did an outstanding job on my project, and communication was seamless.',
				// 'image_url' => 'images/testimonials/john_doe.jpg',
				'image_url' => 'images/client.PNG',

			],
			[
				'name' => 'Jane Smith',
				'feedback' => 'QualityClix delivered a top-notch product for our business. We are extremely satisfied with the results.',
				'image_url' => 'images/client.PNG',
			],
			[
				'name' => 'Herry Thompson',
				'feedback' => 'The mobile app development was fantastic! The team listened to our needs and implemented them perfectly.',
				'image_url' => 'images/client.PNG',
			],
			[
				'name' => 'Alice Johnson',
				'feedback' => 'Great experience working with QualityClix! They exceeded expectations and delivered on time.',
				'image_url' => 'images/client.PNG',
			],
			[
				'name' => 'Bob Williams',
				'feedback' => 'I highly recommend QualityClix. They provide exceptional service, and their support team is always there when needed.',
				'image_url' => 'images/client.PNG',
			]
		];
	}	
	function getProjects() {
		return [
			[
				'title' => 'Online Food Ordering',
				'desc' => 'An intuitive online food ordering system built for restaurants to manage menus, orders, and payments efficiently.',
				'skills' => ['HTML5', 'CSS3', 'PHP', 'MySQL', 'Bootstrap'],
				'client' => 'Mr. Herry Thompson',
				'image' => 'images/projects/phocus/phocus.png',
				'link' => '#',
			],
			[
				'title' => 'YooConnect',
				'desc' => 'YooConnect is an application where Admins create online questionnaires and then required users (within that specific Admin jurisdiction) are asked to answer those questionnaires. Users answer those questionnaires and then later on a legal document can be formed and downloaded using the answers the users have provided.
					This application is specifically developed for lawyers and lawyers firms. Answers provided by users are used in uploaded Word document templates of legal documents, once the required questionnaires are complete that legal document is allowed to be downloaded.',
				'skills' => ['HTML5', 'CSS3', 'PHP', 'Laravel', 'JavaScript', 'MySQL'],
				'client' => 'John Doe (Law Firm)',
				'image' => 'images/projects/phocus/phocus.png',
				'link' => '#',
			],
			[
				'title' => 'Phocus',
				'desc' => 'Phocus is a web application that connects professional photographers with clients looking to advertise their business/products. It lets the client define a customized photoshoot, based on which the system matches it with the most suitable photographers in the defined area and issues invitations to them. The system covers bookings, payments, feedback and ratings for the photoshoot.',
				'skills' => ['HTML5', 'CSS3', 'React', 'Node.js', 'Bootstrap'],
				'client' => 'Jane Smith Photography',
				'image' => 'images/projects/phocus/phocus.png',
				'link' => '#',
			],
			[
				'title' => 'Show Me The Rental',
				'desc' => 'A real estate leads system connecting tenants with property managers and landlords via multi-channel listings.',
				'skills' => ['React', 'Firebase', 'Bootstrap', 'HTML5', 'CSS3'],
				'client' => 'SMTR Group',
				'image' => 'images/projects/phocus/phocus.png',
				'link' => '#',
			],
			[
				'title' => 'Brother and Brother',
				'desc' => 'IT consulting and software development firm website showcasing services, projects, and technology stack.',
				'skills' => ['Next.js', 'Tailwind CSS', 'JavaScript', 'React'],
				'client' => 'Brother & Brother Ltd.',
				'image' => 'images/projects/phocus/phocus.png',
				'link' => '#',
			],
			[
				'title' => 'ERP Web Application',
				'desc' => 'Comprehensive ERP system managing accounting, HR, inventory, student/course modules, and more for enterprises.',
				'skills' => ['Vue.js', 'Laravel', 'MySQL', 'JavaScript', 'Bootstrap'],
				'client' => 'Al-Huda Group',
				'image' => 'images/projects/phocus/phocus.png',
				'link' => '#',
			],
			[
				'title' => 'Hiking - WordPress',
				'desc' => 'A hiking and adventure booking site showcasing trails, services, and online booking capabilities.',
				'skills' => ['WordPress', 'Elementor', 'HTML5', 'CSS3'],
				'client' => 'TrailBlazers Inc.',
				'image' => 'images/projects/1/1.png',
				'link' => '#',
			],
			[
				'title' => 'Pancemaster',
				'desc' => 'A custom backend solution for managing internal workflows and automating repetitive tasks for a logistics company.',
				'skills' => ['PHP', 'Laravel', 'MySQL', 'jQuery'],
				'client' => 'Pancemaster Logistics',
				'image' => 'images/projects/phocus/phocus.png',
				'link' => '#',
			],
		];
	}
?>