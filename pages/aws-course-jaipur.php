<?php
$course = [
 'slug'=>'aws-course-jaipur','short_name'=>'AWS Cloud','h1'=>'AWS Course in Jaipur',
 'eyebrow'=>'Cloud Fundamentals + Core AWS Services',
 'headline'=>'Learn Cloud Computing Foundations With AWS',
 'summary'=>'Build a practical understanding of cloud computing using AWS concepts and core services. Learn compute, storage, networking, identity, monitoring and deployment foundations for cloud and DevOps pathways.',
 'image'=>'assests/Mango%20engineers%20images/aws-course-jaipur-mango-engineers.webp',
 'highlights'=>[['Cloud Foundation','Understand regions, availability, elasticity and shared-responsibility concepts.'],['Core Services','Learn foundational compute, storage, networking and identity concepts.'],['Hands-On Thinking','Apply cloud concepts through guided configurations and deployment exercises.'],['DevOps Path','Use AWS as a foundation for broader cloud and DevOps learning.']],
 'who_for'=>['Students starting cloud computing.','Developers learning deployment and infrastructure.','IT professionals moving toward cloud roles.','DevOps learners needing AWS foundations.'],
 'outcomes'=>['Explain core cloud computing concepts.','Understand common AWS service categories.','Design simple cloud architectures at a foundation level.','Apply basic identity, networking and monitoring concepts.','Progress toward DevOps or advanced AWS certification-oriented study.'],
 'syllabus'=>[
  ['title'=>'Cloud & AWS Foundations','items'=>['Cloud models','Regions and availability zones','AWS account concepts','Shared responsibility','Cost-awareness foundations']],
  ['title'=>'Compute & Storage','items'=>['EC2 concepts','Scaling foundations','S3 concepts','Block/file storage overview','Backup concepts']],
  ['title'=>'Networking & Security','items'=>['VPC foundations','Subnets','Routing concepts','Security groups','IAM foundations','Least privilege']],
  ['title'=>'Operations & Deployment','items'=>['Monitoring foundations','CloudWatch concepts','Load balancing overview','Deployment patterns','DevOps integration concepts']]
 ],
 'projects'=>['Simple cloud architecture design','Static/object storage exercise','Compute/networking exercise','AWS deployment capstone'],
 'career_roles'=>['Cloud Engineer pathway','AWS/Cloud Support pathway','DevOps pathway','Cloud Operations Associate'],
 'fees'=>[['Course Fee','Contact for current fee']],
 'faq'=>[
  ['Is AWS suitable for beginners?','Yes. The course can start from cloud fundamentals before moving into AWS service concepts.'],
  ['Do I need Linux for AWS?','Linux is very useful for cloud and DevOps work. Beginners can learn Linux alongside AWS.'],
  ['Does this prepare me for DevOps?', 'AWS provides a strong cloud foundation for a broader DevOps pathway.'],
  ['Is certification guaranteed?','No. Training can support preparation, but certification requires meeting the relevant exam requirements independently.']
 ],
 'related'=>[['DevOps','devops-course-jaipur.html'],['Linux','linux-course-jaipur.html'],['Microsoft Azure','course-one.html#cloud-devops'],['All Cloud Courses','course-one.html#cloud-devops']],
];
require __DIR__ . '/../includes/course-page.php';