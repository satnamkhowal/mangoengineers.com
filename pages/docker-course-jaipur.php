<?php
$course=[
 'slug'=>'docker-course-jaipur','short_name'=>'Docker','h1'=>'Docker Course in Jaipur',
 'eyebrow'=>'Containers + Images + Compose',
 'headline'=>'Learn Docker for Modern Application Deployment',
 'summary'=>'Build practical container skills for development and DevOps. Learn images, containers, Dockerfiles, volumes, networks and Compose-oriented workflows using hands-on exercises.',
 'image'=>'assests/Mango%20engineers%20images/docker-course-jaipur-mango-engineers.webp',
 'highlights'=>[['Container Basics','Understand images, containers and registries.'],['Dockerfiles','Package applications into repeatable images.'],['Networking & Storage','Use volumes and networks in practical setups.'],['DevOps Path','Prepare for Kubernetes and CI/CD workflows.']],
 'who_for'=>['Developers learning deployment workflows.','DevOps learners.','Cloud learners.','Students preparing for containerised application projects.'],
 'outcomes'=>['Run and manage containers.','Create Dockerfiles.','Use volumes and networks.','Build multi-container setups with Compose concepts.','Prepare containerised apps for CI/CD or Kubernetes.'],
 'syllabus'=>[
  ['title'=>'Docker Foundations','items'=>['Containers vs VMs','Images','Containers','Registries','Basic commands']],
  ['title'=>'Building Images','items'=>['Dockerfiles','Layers','Build context','Tags','Image optimisation concepts']],
  ['title'=>'Runtime & Networking','items'=>['Volumes','Bind mounts','Networks','Environment variables','Logs']],
  ['title'=>'Multi-Container & DevOps','items'=>['Compose concepts','Service dependencies','Containerised project','CI/CD integration concepts','Kubernetes readiness']]
 ],
 'projects'=>['Containerise a simple application','Dockerfile exercise','Multi-container Compose project','Deployment-oriented container capstone'],
 'career_roles'=>['DevOps pathway','Cloud/DevOps Associate','Backend Developer with container skills','Platform engineering pathway'],
 'fees'=>[['Course Fee','Contact for current fee']],
 'faq'=>[
  ['Do I need Linux before Docker?','Basic Linux knowledge is recommended and helps with practical container workflows.'],
  ['Does Docker include Kubernetes?','Docker prepares you for Kubernetes, but Kubernetes is covered on a dedicated course page.'],
  ['Will I build projects?','Yes. Practical containerisation exercises and a project are included.'],
  ['Is placement guaranteed?','No. Career support does not guarantee employment.']
 ],
 'related'=>[['DevOps','devops-course-jaipur.html'],['Kubernetes','kubernetes-course-jaipur.html'],['Linux','linux-course-jaipur.html'],['AWS','aws-course-jaipur.html']],
];
require __DIR__ . '/../includes/course-page.php';