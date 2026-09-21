<?php
$course = [
 'slug'=>'linux-course-jaipur','short_name'=>'Linux','h1'=>'Linux Course in Jaipur',
 'eyebrow'=>'Command Line + Administration Foundations',
 'headline'=>'Build Practical Linux Skills for Servers, Cloud and DevOps',
 'summary'=>'Learn Linux from command-line fundamentals through files, permissions, processes, users, networking and basic administration. Linux is a core foundation for cloud, DevOps, servers and many software engineering workflows.',
 'image'=>'assests/Mango%20engineers%20images/linux-course-jaipur-mango-engineers.webp',
 'highlights'=>[['Command Line','Become comfortable navigating and operating from the Linux shell.'],['Administration','Learn users, groups, permissions, processes and services.'],['Networking Basics','Understand common networking and troubleshooting commands.'],['DevOps Foundation','Prepare for Docker, cloud and DevOps learning paths.']],
 'who_for'=>['Beginners entering Linux/server administration.','Developers preparing for deployment and DevOps.','Students learning cloud infrastructure.','IT professionals strengthening Linux skills.'],
 'outcomes'=>['Navigate and manage files from the command line.','Work with permissions, users and groups.','Inspect and control processes/services.','Use common networking and troubleshooting tools.','Write basic shell commands/scripts for repeatable tasks.'],
 'syllabus'=>[
  ['title'=>'Linux Basics','items'=>['Linux filesystem','Shell and commands','Files/directories','Text processing','Editors','Help/documentation']],
  ['title'=>'Users & Permissions','items'=>['Users/groups','Ownership','Permissions','sudo concepts','Environment variables','Package management foundations']],
  ['title'=>'Processes & Services','items'=>['Processes','Signals','Services','Logs','Scheduling concepts','Storage basics']],
  ['title'=>'Networking & Automation','items'=>['Networking commands','SSH concepts','Ports/services','Shell scripting foundations','Automation exercises','DevOps readiness']]
 ],
 'projects'=>['Linux administration lab','User/permission management exercise','Service/log troubleshooting exercise','Shell automation mini-project'],
 'career_roles'=>['Linux Administrator pathway','Cloud Support pathway','DevOps pathway','Server/Infrastructure Support'],
 'fees'=>[['Course Fee','Contact for current fee']],
 'faq'=>[
  ['Is Linux difficult for beginners?','No. The course starts from command-line and filesystem fundamentals before administration topics.'],
  ['Is Linux required for DevOps?', 'Linux is one of the most useful foundations for DevOps, cloud and server work.'],
  ['Does it include shell scripting?', 'Yes. Basic shell scripting and automation concepts are included.'],
  ['Is placement guaranteed?','No. Placement assistance can support preparation, but cannot guarantee employment.']
 ],
 'related'=>[['DevOps','devops-course-jaipur.html'],['AWS','aws-course-jaipur.html'],['Docker','course-one.html#cloud-devops'],['Kubernetes','course-one.html#cloud-devops']],
];
require __DIR__ . '/../includes/course-page.php';