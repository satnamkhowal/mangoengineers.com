<?php
$course = [
 'slug'=>'devops-course-jaipur','short_name'=>'DevOps','h1'=>'DevOps Course in Jaipur',
 'eyebrow'=>'Linux + Git + CI/CD + Containers + Cloud',
 'headline'=>'Build Practical DevOps and Deployment Skills',
 'summary'=>'Learn the foundations of modern DevOps workflows: Linux, version control, CI/CD thinking, containers, orchestration and cloud-oriented deployment concepts. The focus is on practical workflow understanding and hands-on exercises.',
 'image'=>'assests/Mango%20engineers%20images/devops-course-jaipur-mango-engineers.webp',
 'highlights'=>[['Linux Foundation','Work comfortably with Linux command-line and server basics.'],['CI/CD Thinking','Understand build, test and deployment automation workflows.'],['Containers','Learn Docker foundations and Kubernetes concepts.'],['Cloud Context','Connect DevOps practices to AWS/cloud deployment patterns.']],
 'who_for'=>['Developers moving toward deployment and operations.','Linux learners progressing into DevOps.','Students targeting cloud/DevOps pathways.','IT professionals modernising infrastructure skills.'],
 'outcomes'=>['Use Linux for common development/operations tasks.','Work with Git-based collaboration workflows.','Understand CI/CD pipelines and automation.','Containerise applications with Docker foundations.','Understand Kubernetes and cloud deployment concepts.'],
 'syllabus'=>[
  ['title'=>'Linux & Git','items'=>['Linux CLI','Files/processes/permissions','Networking basics','Shell concepts','Git workflow','Branching and collaboration']],
  ['title'=>'CI/CD','items'=>['Build/test/deploy pipeline concepts','Automation principles','Environment management','Secrets concepts','Release workflow']],
  ['title'=>'Containers & Orchestration','items'=>['Docker images/containers','Dockerfiles','Volumes/networks','Compose concepts','Kubernetes architecture','Deployments/services concepts']],
  ['title'=>'Cloud & Operations','items'=>['AWS/cloud foundations','Infrastructure concepts','Monitoring/logging foundations','Reliability thinking','Deployment project']]
 ],
 'projects'=>['Linux automation exercises','Containerised application project','CI/CD pipeline exercise','DevOps deployment capstone'],
 'career_roles'=>['DevOps Engineer pathway','Cloud/DevOps Associate','Build & Release pathway','Junior Site Reliability pathway'],
 'fees'=>[['Course Fee','Contact for current fee']],
 'faq'=>[
  ['Do I need Linux before DevOps?','Linux knowledge is highly useful. This pathway includes Linux foundations, and a dedicated Linux course is also available.'],
  ['Does DevOps include Docker and Kubernetes?','Yes. Docker foundations and Kubernetes concepts are part of the learning path.'],
  ['Does it include AWS?', 'Cloud/AWS foundations are included contextually; the dedicated AWS page covers cloud services in more depth.'],
  ['Is placement guaranteed?','No. Placement assistance is support, not a job guarantee.']
 ],
 'related'=>[['Linux','linux-course-jaipur.html'],['AWS','aws-course-jaipur.html'],['Docker','course-one.html#cloud-devops'],['Kubernetes','course-one.html#cloud-devops']],
];
require __DIR__ . '/../includes/course-page.php';