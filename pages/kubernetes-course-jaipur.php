<?php
$course=[
 'slug'=>'kubernetes-course-jaipur','short_name'=>'Kubernetes','h1'=>'Kubernetes Course in Jaipur',
 'eyebrow'=>'Orchestration + Deployments + Services',
 'headline'=>'Learn Kubernetes for Container Orchestration',
 'summary'=>'Progress from container foundations into Kubernetes concepts. Learn pods, deployments, services, configuration, scaling and cluster-oriented application deployment at a practical foundation level.',
 'image'=>'assests/Mango%20engineers%20images/kubernetes-course-jaipur-mango-engineers.webp',
 'highlights'=>[['Core Objects','Understand pods, deployments and services.'],['Scaling','Learn replica and scaling concepts.'],['Configuration','Work with configuration and secret concepts.'],['DevOps Integration','Connect Kubernetes learning with Docker, cloud and CI/CD.']],
 'who_for'=>['Docker learners.','DevOps learners.','Cloud engineers.','Developers moving into deployment/platform work.'],
 'outcomes'=>['Explain Kubernetes architecture.','Deploy containerised applications.','Use deployments and services.','Understand configuration and scaling concepts.','Prepare for cloud-native DevOps pathways.'],
 'syllabus'=>[
  ['title'=>'Kubernetes Foundations','items'=>['Cluster architecture','Control plane concepts','Nodes','Pods','kubectl workflow']],
  ['title'=>'Workloads','items'=>['Deployments','ReplicaSets','Rolling updates','Namespaces','Labels/selectors']],
  ['title'=>'Networking & Configuration','items'=>['Services','Cluster networking concepts','ConfigMaps','Secrets','Ingress overview']],
  ['title'=>'Operations Foundations','items'=>['Scaling','Health checks','Logs','Resource concepts','Deployment project']]
 ],
 'projects'=>['Deploy a containerised application','Rolling update exercise','Service/configuration lab','Kubernetes deployment capstone'],
 'career_roles'=>['DevOps Engineer pathway','Cloud Engineer pathway','Platform Engineering pathway','Kubernetes/Container Operations pathway'],
 'fees'=>[['Course Fee','Contact for current fee']],
 'faq'=>[
  ['Should I learn Docker first?','Yes. Docker/container fundamentals are strongly recommended before Kubernetes.'],
  ['Does this include cloud Kubernetes services?','Cloud-managed Kubernetes concepts can be introduced, while the core focus is portable Kubernetes foundations.'],
  ['Is this beginner friendly?','It is best suited to learners who already know basic Linux and Docker.'],
  ['Is placement guaranteed?','No. Placement assistance cannot guarantee employment.']
 ],
 'related'=>[['Docker','docker-course-jaipur.html'],['DevOps','devops-course-jaipur.html'],['AWS','aws-course-jaipur.html'],['Linux','linux-course-jaipur.html']],
];
require __DIR__ . '/../includes/course-page.php';