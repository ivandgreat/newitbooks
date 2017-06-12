<?php

use Illuminate\Database\Seeder;
use App\Blog;
class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         //
         $blog_one = new Blog();
         $blog_one->title = 'How to Generate Dummy Data for Your Database';
         $blog_one->body = 'Hi everyone. This tip is focused squarely at my DBA students, regardless of whether your platform if SQL Server, Oracle, MySQL, or Access.
         Here’s the situation: you are designing a database and need to perform tests in your development environment using live data. Well, where in the world are you going to get that live data? You can’t very well invest half a workday typing fictitious records, right? Using a copy of your organization’s production data is a possibility, but this isn’t always feasible due to legal and/or ethical considerations.';
         $blog_one->save();

         $blog_two = new Blog();
         $blog_two->title = 'A Certification Blueprint for Linux on Microsoft';
         $blog_two->body = 'Now that Microsoft seems to have drunk the Linux kool-aid, IT pros find themselves confronted with an entirely new certification and training landscape. As IT pros work to figure out what skills and knowledge will best meet their needs in this era of Microsoft openness, we lay out the certs you should pursue.
         Microsoft and Linux Certification Pathways – from the Trainers
         We asked our trainers what certifications and training would be most effective for IT pros looking to advance their sysadmin careers as Microsoft and Linux learn to play nicely together. Trainers Shawn Powers and Garth Schulte weighed in on the paths that will lead you to success.';
         $blog_two->save();
     }
}
