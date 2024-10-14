<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("reviews")->insert([
            //assessment 1
            [
                "reviewer_id" => 5,
                "reviewee_id" => 7,
                "review_text" =>
                    "I appreciate your efforts in the group project. Your contributions were valuable and helped us complete the task effectively. Well done!",
                "assessment_id" => 1,
            ],
            [
                "reviewer_id" => 5,
                "reviewee_id" => 9,
                "review_text" =>
                    "Your presentation skills have improved significantly. The clarity in your explanations made it easier for everyone to understand the concepts.",
                "assessment_id" => 1,
            ],
            [
                "reviewer_id" => 5,
                "reviewee_id" => 10,
                "review_text" =>
                    "You displayed great leadership during the project. Your ability to organize tasks and keep everyone motivated was impressive. Keep it up!",
                "assessment_id" => 1,
            ],
            [
                "reviewer_id" => 7,
                "reviewee_id" => 5,
                "review_text" =>
                    "I found your insights during our discussions to be very enlightening. They added depth to our project, and I look forward to more collaborations.",
                "assessment_id" => 1,
            ],

            [
                "reviewer_id" => 7,
                "reviewee_id" => 9,
                "review_text" =>
                    "Thank you for your constructive feedback during the review sessions. It really helped me refine my work and aim for higher standards.",
                "assessment_id" => 1,
            ],
            [
                "reviewer_id" => 7,
                "reviewee_id" => 10,
                "review_text" =>
                    "Your attention to detail in the project was remarkable. It made a big difference in our final output and set a great example for others.",
                "assessment_id" => 1,
            ],
            [
                "reviewer_id" => 9,
                "reviewee_id" => 5,
                "review_text" =>
                    "You effectively engaged with our team, and your input was vital in navigating through challenges. I'm looking forward to future collaborations!",
                "assessment_id" => 1,
            ],
            [
                "reviewer_id" => 9,
                "reviewee_id" => 7,
                "review_text" =>
                    "Your creativity during our project was inspiring. The ideas you presented pushed us to think outside the box and improve our outcomes.",
                "assessment_id" => 1,
            ],

            [
                "reviewer_id" => 9,
                "reviewee_id" => 10,
                "review_text" =>
                    "I admire your dedication and commitment to the project. You always strive for excellence, and it reflects in your work. Great job!",
                "assessment_id" => 1,
            ],
            [
                "reviewer_id" => 10,
                "reviewee_id" => 5,
                "review_text" =>
                    "Your ability to facilitate discussions was instrumental in our success. You kept everyone engaged and made sure all voices were heard.",
                "assessment_id" => 1,
            ],
            [
                "reviewer_id" => 10,
                "reviewee_id" => 7,
                "review_text" =>
                    "Your analytical skills were evident throughout our project. You helped the team identify issues quickly, leading to effective solutions.",
                "assessment_id" => 1,
            ],
            [
                "reviewer_id" => 10,
                "reviewee_id" => 9,
                "review_text" =>
                    "I really appreciated your help during the brainstorming sessions. Your suggestions sparked great ideas that improved our project tremendously.",
                "assessment_id" => 1,
            ],

            [
                "reviewer_id" => 11,
                "reviewee_id" => 12,
                "review_text" =>
                    "Your work ethic and enthusiasm are contagious. You pushed the team to meet deadlines while maintaining high-quality standards. Well done!",
                "assessment_id" => 1,
            ],
            [
                "reviewer_id" => 11,
                "reviewee_id" => 13,
                "review_text" =>
                    "You effectively balanced team dynamics and ensured everyone contributed. Your leadership helped us stay organized and focused on our goals.",
                "assessment_id" => 1,
            ],
            [
                "reviewer_id" => 11,
                "reviewee_id" => 14,
                "review_text" =>
                    "Your positive attitude made working on the project enjoyable. You kept our spirits high, especially during stressful moments. Thank you for that!",
                "assessment_id" => 1,
            ],
            [
                "reviewer_id" => 12,
                "reviewee_id" => 11,
                "review_text" =>
                    "Your thorough research added significant value to our project. It was instrumental in backing our arguments with solid data and examples.",
                "assessment_id" => 1,
            ],

            [
                "reviewer_id" => 12,
                "reviewee_id" => 13,
                "review_text" =>
                    "Your contributions were critical to our project's success. You were proactive and shared valuable insights that helped us stay on track.",
                "assessment_id" => 1,
            ],
            [
                "reviewer_id" => 12,
                "reviewee_id" => 14,
                "review_text" =>
                    "You excelled in coordinating our efforts, ensuring that everyone understood their roles and responsibilities. Your support was greatly appreciated.",
                "assessment_id" => 1,
            ],
            [
                "reviewer_id" => 13,
                "reviewee_id" => 11,
                "review_text" =>
                    "Your presentation during the final review was outstanding. You communicated our findings clearly, making it easy for others to follow.",
                "assessment_id" => 1,
            ],
            [
                "reviewer_id" => 13,
                "reviewee_id" => 12,
                "review_text" =>
                    "Your engagement with the group discussions was commendable. You consistently brought fresh ideas that sparked interesting conversations.",
                "assessment_id" => 1,
            ],

            [
                "reviewer_id" => 13,
                "reviewee_id" => 14,
                "review_text" =>
                    "Your analytical approach to problem-solving was refreshing. It helped our team tackle challenges more effectively and creatively.",
                "assessment_id" => 1,
            ],
            [
                "reviewer_id" => 14,
                "reviewee_id" => 11,
                "review_text" =>
                    "You showed great empathy during our discussions. It made a huge difference in how we communicated and worked together.",
                "assessment_id" => 1,
            ],
            [
                "reviewer_id" => 14,
                "reviewee_id" => 12,
                "review_text" =>
                    "Your thorough understanding of the subject matter was invaluable. You were always willing to assist others with their questions and concerns.",
                "assessment_id" => 1,
            ],
            [
                "reviewer_id" => 14,
                "reviewee_id" => 13,
                "review_text" =>
                    "Your attention to detail ensured that our final submission met all requirements. You truly went above and beyond in your work.",
                "assessment_id" => 1,
            ],

            [
                "reviewer_id" => 15,
                "reviewee_id" => 16,
                "review_text" =>
                    "Your support throughout this project made a significant impact. You always ensured that everyone was on the same page and motivated.",
                "assessment_id" => 1,
            ],
            [
                "reviewer_id" => 15,
                "reviewee_id" => 17,
                "review_text" =>
                    "I learned a lot from your insights during the project. Your feedback was always constructive and helped me improve my own work.",
                "assessment_id" => 1,
            ],
            [
                "reviewer_id" => 15,
                "reviewee_id" => 18,
                "review_text" =>
                    "You were a fantastic team player, always willing to lend a hand when needed. It was a pleasure working alongside you.",
                "assessment_id" => 1,
            ],
            [
                "reviewer_id" => 16,
                "reviewee_id" => 15,
                "review_text" =>
                    "Your innovative ideas contributed greatly to our success. Your creativity and resourcefulness were evident throughout the entire process.",
                "assessment_id" => 1,
            ],

            [
                "reviewer_id" => 16,
                "reviewee_id" => 17,
                "review_text" =>
                    "Your feedback during the assessment helped us enhance our project quality. Your thoughtful suggestions encouraged our team to aim higher.",
                "assessment_id" => 1,
            ],
            [
                "reviewer_id" => 16,
                "reviewee_id" => 18,
                "review_text" =>
                    "You excelled in ensuring our deadlines were met while maintaining quality. Your time management skills were impressive and inspiring.",
                "assessment_id" => 1,
            ],
            [
                "reviewer_id" => 17,
                "reviewee_id" => 16,
                "review_text" =>
                    "Your thorough approach to each task led our project to success. You demonstrated a great work ethic and dedication throughout.",
                "assessment_id" => 1,
            ],
            [
                "reviewer_id" => 17,
                "reviewee_id" => 15,
                "review_text" =>
                    "You consistently offered support to the entire team, which fostered a collaborative environment. Your positivity was much appreciated during the project.",
                "assessment_id" => 1,
            ],

            [
                "reviewer_id" => 17,
                "reviewee_id" => 18,
                "review_text" =>
                    "I appreciate the effort you put into every aspect of the project. Your attention to detail ensured a high-quality outcome for our team.",
                "assessment_id" => 1,
            ],
            [
                "reviewer_id" => 18,
                "reviewee_id" => 16,
                "review_text" =>
                    "Your ability to listen to others' ideas and integrate them into the project was commendable. It helped create a strong sense of teamwork.",
                "assessment_id" => 1,
            ],
            [
                "reviewer_id" => 18,
                "reviewee_id" => 17,
                "review_text" =>
                    "You consistently brought new perspectives to our discussions, enhancing our critical thinking and problem-solving abilities as a group.",
                "assessment_id" => 1,
            ],
            [
                "reviewer_id" => 18,
                "reviewee_id" => 15,
                "review_text" =>
                    "Your reliability and willingness to help others did not go unnoticed. You were a fantastic teammate, always ensuring everyone was included.",
                "assessment_id" => 1,
            ],

            //assessment 3

            [
                "reviewer_id" => 5,
                "reviewee_id" => 7,
                "review_text" =>
                    "I appreciate your efforts in the group project. Your contributions were valuable and helped us complete the task effectively. Well done!",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 5,
                "reviewee_id" => 9,
                "review_text" =>
                    "Your presentation skills have improved significantly. The clarity in your explanations made it easier for everyone to understand the concepts.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 5,
                "reviewee_id" => 10,
                "review_text" =>
                    "You displayed great leadership during the project. Your ability to organize tasks and keep everyone motivated was impressive. Keep it up!",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 7,
                "reviewee_id" => 5,
                "review_text" =>
                    "I found your insights during our discussions to be very enlightening. They added depth to our project, and I look forward to more collaborations.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 7,
                "reviewee_id" => 9,
                "review_text" =>
                    "Thank you for your constructive feedback during the review sessions. It really helped me refine my work and aim for higher standards.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 7,
                "reviewee_id" => 10,
                "review_text" =>
                    "Your attention to detail in the project was remarkable. It made a big difference in our final output and set a great example for others.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 9,
                "reviewee_id" => 5,
                "review_text" =>
                    "You effectively engaged with our team, and your input was vital in navigating through challenges. I'm looking forward to future collaborations!",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 9,
                "reviewee_id" => 7,
                "review_text" =>
                    "Your creativity during our project was inspiring. The ideas you presented pushed us to think outside the box and improve our outcomes.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 9,
                "reviewee_id" => 10,
                "review_text" =>
                    "I admire your dedication and commitment to the project. You always strive for excellence, and it reflects in your work. Great job!",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 10,
                "reviewee_id" => 5,
                "review_text" =>
                    "Your ability to facilitate discussions was instrumental in our success. You kept everyone engaged and made sure all voices were heard.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 10,
                "reviewee_id" => 7,
                "review_text" =>
                    "Your analytical skills were evident throughout our project. You helped the team identify issues quickly, leading to effective solutions.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 10,
                "reviewee_id" => 9,
                "review_text" =>
                    "I really appreciated your help during the brainstorming sessions. Your suggestions sparked great ideas that improved our project tremendously.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 11,
                "reviewee_id" => 12,
                "review_text" =>
                    "Your work ethic and enthusiasm are contagious. You pushed the team to meet deadlines while maintaining high-quality standards. Well done!",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 11,
                "reviewee_id" => 13,
                "review_text" =>
                    "You effectively balanced team dynamics and ensured everyone contributed. Your leadership helped us stay organized and focused on our goals.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 11,
                "reviewee_id" => 14,
                "review_text" =>
                    "Your positive attitude made working on the project enjoyable. You kept our spirits high, especially during stressful moments. Thank you for that!",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 12,
                "reviewee_id" => 11,
                "review_text" =>
                    "Your thorough research added significant value to our project. It was instrumental in backing our arguments with solid data and examples.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 12,
                "reviewee_id" => 13,
                "review_text" =>
                    "Your contributions were critical to our project's success. You were proactive and shared valuable insights that helped us stay on track.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 12,
                "reviewee_id" => 14,
                "review_text" =>
                    "You excelled in coordinating our efforts, ensuring that everyone understood their roles and responsibilities. Your support was greatly appreciated.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 13,
                "reviewee_id" => 11,
                "review_text" =>
                    "Your presentation during the final review was outstanding. You communicated our findings clearly, making it easy for others to follow.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 13,
                "reviewee_id" => 12,
                "review_text" =>
                    "Your engagement with the group discussions was commendable. You consistently brought fresh ideas that sparked interesting conversations.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 13,
                "reviewee_id" => 14,
                "review_text" =>
                    "Your analytical approach to problem-solving was refreshing. It helped our team tackle challenges more effectively and creatively.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 14,
                "reviewee_id" => 11,
                "review_text" =>
                    "You showed great empathy during our discussions. It made a huge difference in how we communicated and worked together.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 14,
                "reviewee_id" => 12,
                "review_text" =>
                    "Your thorough understanding of the subject matter was invaluable. You were always willing to assist others with their questions and concerns.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 14,
                "reviewee_id" => 13,
                "review_text" =>
                    "Your attention to detail ensured that our final submission met all requirements. You truly went above and beyond in your work.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 15,
                "reviewee_id" => 16,
                "review_text" =>
                    "Your support throughout this project made a significant impact. You always ensured that everyone was on the same page and motivated.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 15,
                "reviewee_id" => 17,
                "review_text" =>
                    "I learned a lot from your insights during the project. Your feedback was always constructive and helped me improve my own work.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 15,
                "reviewee_id" => 18,
                "review_text" =>
                    "You were a fantastic team player, always willing to lend a hand when needed. It was a pleasure working alongside you.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 16,
                "reviewee_id" => 15,
                "review_text" =>
                    "Your innovative ideas contributed greatly to our success. Your creativity and resourcefulness were evident throughout the entire process.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 16,
                "reviewee_id" => 17,
                "review_text" =>
                    "Your feedback during the assessment helped us enhance our project quality. Your thoughtful suggestions encouraged our team to aim higher.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 16,
                "reviewee_id" => 18,
                "review_text" =>
                    "You excelled in ensuring our deadlines were met while maintaining quality. Your time management skills were impressive and inspiring.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 17,
                "reviewee_id" => 16,
                "review_text" =>
                    "Your thorough approach to each task led our project to success. You demonstrated a great work ethic and dedication throughout.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 17,
                "reviewee_id" => 15,
                "review_text" =>
                    "You consistently offered support to the entire team, which fostered a collaborative environment. Your positivity was much appreciated during the project.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 17,
                "reviewee_id" => 18,
                "review_text" =>
                    "Your constructive criticism helped improve my work. You provided feedback in a way that was motivating and insightful.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 18,
                "reviewee_id" => 15,
                "review_text" =>
                    "Your leadership and guidance were invaluable to the team. You ensured everyone had the tools and resources needed to succeed.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 18,
                "reviewee_id" => 16,
                "review_text" =>
                    "You took the time to help others understand their tasks, which contributed to the smooth functioning of the team. Thank you for your patience and support.",
                "assessment_id" => 3,
            ],
            [
                "reviewer_id" => 18,
                "reviewee_id" => 17,
                "review_text" =>
                    "You provided valuable feedback that improved our project. Your attention to detail ensured that our final submission was of high quality.",
                "assessment_id" => 3,
            ],

            //assessment 6

            [
                "reviewer_id" => 5,
                "reviewee_id" => 8,
                "review_text" =>
                    "I appreciate your efforts in the group project. Your contributions were valuable and helped us complete the task effectively. Well done!",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 5,
                "reviewee_id" => 9,
                "review_text" =>
                    "Your presentation skills have improved significantly. The clarity in your explanations made it easier for everyone to understand the concepts.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 5,
                "reviewee_id" => 10,
                "review_text" =>
                    "You displayed great leadership during the project. Your ability to organize tasks and keep everyone motivated was impressive. Keep it up!",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 8,
                "reviewee_id" => 5,
                "review_text" =>
                    "I found your insights during our discussions to be very enlightening. They added depth to our project, and I look forward to more collaborations.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 8,
                "reviewee_id" => 9,
                "review_text" =>
                    "Thank you for your constructive feedback during the review sessions. It really helped me refine my work and aim for higher standards.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 8,
                "reviewee_id" => 10,
                "review_text" =>
                    "Your attention to detail in the project was remarkable. It made a big difference in our final output and set a great example for others.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 9,
                "reviewee_id" => 5,
                "review_text" =>
                    "You effectively engaged with our team, and your input was vital in navigating through challenges. I'm looking forward to future collaborations!",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 9,
                "reviewee_id" => 8,
                "review_text" =>
                    "Your creativity during our project was inspiring. The ideas you presented pushed us to think outside the box and improve our outcomes.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 9,
                "reviewee_id" => 10,
                "review_text" =>
                    "I admire your dedication and commitment to the project. You always strive for excellence, and it reflects in your work. Great job!",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 10,
                "reviewee_id" => 5,
                "review_text" =>
                    "Your ability to facilitate discussions was instrumental in our success. You kept everyone engaged and made sure all voices were heard.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 10,
                "reviewee_id" => 8,
                "review_text" =>
                    "Your analytical skills were evident throughout our project. You helped the team identify issues quickly, leading to effective solutions.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 10,
                "reviewee_id" => 9,
                "review_text" =>
                    "I really appreciated your help during the brainstorming sessions. Your suggestions sparked great ideas that improved our project tremendously.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 11,
                "reviewee_id" => 12,
                "review_text" =>
                    "Your work ethic and enthusiasm are contagious. You pushed the team to meet deadlines while maintaining high-quality standards. Well done!",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 11,
                "reviewee_id" => 13,
                "review_text" =>
                    "You effectively balanced team dynamics and ensured everyone contributed. Your leadership helped us stay organized and focused on our goals.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 11,
                "reviewee_id" => 14,
                "review_text" =>
                    "Your positive attitude made working on the project enjoyable. You kept our spirits high, especially during stressful moments. Thank you for that!",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 12,
                "reviewee_id" => 11,
                "review_text" =>
                    "Your thorough research added significant value to our project. It was instrumental in backing our arguments with solid data and examples.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 12,
                "reviewee_id" => 13,
                "review_text" =>
                    "Your contributions were critical to our project's success. You were proactive and shared valuable insights that helped us stay on track.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 12,
                "reviewee_id" => 14,
                "review_text" =>
                    "You excelled in coordinating our efforts, ensuring that everyone understood their roles and responsibilities. Your support was greatly appreciated.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 13,
                "reviewee_id" => 11,
                "review_text" =>
                    "Your presentation during the final review was outstanding. You communicated our findings clearly, making it easy for others to follow.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 13,
                "reviewee_id" => 12,
                "review_text" =>
                    "Your engagement with the group discussions was commendable. You consistently brought fresh ideas that sparked interesting conversations.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 13,
                "reviewee_id" => 14,
                "review_text" =>
                    "Your analytical approach to problem-solving was refreshing. It helped our team tackle challenges more effectively and creatively.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 14,
                "reviewee_id" => 11,
                "review_text" =>
                    "You showed great empathy during our discussions. It made a huge difference in how we communicated and worked together.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 14,
                "reviewee_id" => 12,
                "review_text" =>
                    "Your thorough understanding of the subject matter was invaluable. You were always willing to assist others with their questions and concerns.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 14,
                "reviewee_id" => 13,
                "review_text" =>
                    "Your attention to detail ensured that our final submission met all requirements. You truly went above and beyond in your work.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 15,
                "reviewee_id" => 16,
                "review_text" =>
                    "Your support throughout this project made a significant impact. You always ensured that everyone was on the same page and motivated.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 15,
                "reviewee_id" => 17,
                "review_text" =>
                    "I learned a lot from your insights during the project. Your feedback was always constructive and helped me improve my own work.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 15,
                "reviewee_id" => 18,
                "review_text" =>
                    "You were a fantastic team player, always willing to lend a hand when needed. It was a pleasure working alongside you.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 16,
                "reviewee_id" => 15,
                "review_text" =>
                    "Your innovative ideas contributed greatly to our success. Your creativity and resourcefulness were evident throughout the entire process.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 16,
                "reviewee_id" => 17,
                "review_text" =>
                    "Your feedback during the assessment helped us enhance our project quality. Your thoughtful suggestions encouraged our team to aim higher.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 16,
                "reviewee_id" => 18,
                "review_text" =>
                    "You excelled in ensuring our deadlines were met while maintaining quality. Your time management skills were impressive and inspiring.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 17,
                "reviewee_id" => 16,
                "review_text" =>
                    "Your thorough approach to each task led our project to success. You demonstrated a great work ethic and dedication throughout.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 17,
                "reviewee_id" => 15,
                "review_text" =>
                    "You consistently offered support to the entire team. Your willingness to assist others played a big role in keeping our project on track.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 17,
                "reviewee_id" => 18,
                "review_text" =>
                    "You were an outstanding collaborator, always open to new ideas and improvements. It was a pleasure working with you on this project.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 18,
                "reviewee_id" => 16,
                "review_text" =>
                    "Your leadership and organizational skills were vital to our project. You kept us on track and ensured we met all the necessary milestones.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 18,
                "reviewee_id" => 15,
                "review_text" =>
                    "Your ability to solve complex problems was impressive. You tackled every challenge head-on and came up with effective solutions.",
                "assessment_id" => 6,
            ],
            [
                "reviewer_id" => 18,
                "reviewee_id" => 17,
                "review_text" =>
                    "Your professionalism and positive attitude helped maintain a productive environment throughout the project. You set a great example for others.",
                "assessment_id" => 6,
            ],

            //assessment 13
            //assessment 13

            [
                "reviewer_id" => 7,
                "reviewee_id" => 8,
                "review_text" =>
                    "I appreciate your efforts in the group project. Your contributions were valuable and helped us complete the task effectively. Well done!",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 7,
                "reviewee_id" => 9,
                "review_text" =>
                    "Your presentation skills have improved significantly. The clarity in your explanations made it easier for everyone to understand the concepts.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 7,
                "reviewee_id" => 10,
                "review_text" =>
                    "You displayed great leadership during the project. Your ability to organize tasks and keep everyone motivated was impressive. Keep it up!",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 8,
                "reviewee_id" => 7,
                "review_text" =>
                    "I found your insights during our discussions to be very enlightening. They added depth to our project, and I look forward to more collaborations.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 8,
                "reviewee_id" => 9,
                "review_text" =>
                    "Thank you for your constructive feedback during the review sessions. It really helped me refine my work and aim for higher standards.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 8,
                "reviewee_id" => 10,
                "review_text" =>
                    "Your attention to detail in the project was remarkable. It made a big difference in our final output and set a great example for others.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 9,
                "reviewee_id" => 7,
                "review_text" =>
                    "You effectively engaged with our team, and your input was vital in navigating through challenges. I'm looking forward to future collaborations!",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 9,
                "reviewee_id" => 8,
                "review_text" =>
                    "Your creativity during our project was inspiring. The ideas you presented pushed us to think outside the box and improve our outcomes.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 9,
                "reviewee_id" => 10,
                "review_text" =>
                    "I admire your dedication and commitment to the project. You always strive for excellence, and it reflects in your work. Great job!",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 10,
                "reviewee_id" => 7,
                "review_text" =>
                    "Your ability to facilitate discussions was instrumental in our success. You kept everyone engaged and made sure all voices were heard.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 10,
                "reviewee_id" => 8,
                "review_text" =>
                    "Your analytical skills were evident throughout our project. You helped the team identify issues quickly, leading to effective solutions.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 10,
                "reviewee_id" => 9,
                "review_text" =>
                    "I really appreciated your help during the brainstorming sessions. Your suggestions sparked great ideas that improved our project tremendously.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 11,
                "reviewee_id" => 12,
                "review_text" =>
                    "Your work ethic and enthusiasm are contagious. You pushed the team to meet deadlines while maintaining high-quality standards. Well done!",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 11,
                "reviewee_id" => 13,
                "review_text" =>
                    "You effectively balanced team dynamics and ensured everyone contributed. Your leadership helped us stay organized and focused on our goals.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 11,
                "reviewee_id" => 14,
                "review_text" =>
                    "Your positive attitude made working on the project enjoyable. You kept our spirits high, especially during stressful moments. Thank you for that!",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 12,
                "reviewee_id" => 11,
                "review_text" =>
                    "Your thorough research added significant value to our project. It was instrumental in backing our arguments with solid data and examples.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 12,
                "reviewee_id" => 13,
                "review_text" =>
                    "Your contributions were critical to our project's success. You were proactive and shared valuable insights that helped us stay on track.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 12,
                "reviewee_id" => 14,
                "review_text" =>
                    "You excelled in coordinating our efforts, ensuring that everyone understood their roles and responsibilities. Your support was greatly appreciated.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 13,
                "reviewee_id" => 11,
                "review_text" =>
                    "Your presentation during the final review was outstanding. You communicated our findings clearly, making it easy for others to follow.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 13,
                "reviewee_id" => 12,
                "review_text" =>
                    "Your engagement with the group discussions was commendable. You consistently brought fresh ideas that sparked interesting conversations.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 13,
                "reviewee_id" => 14,
                "review_text" =>
                    "Your analytical approach to problem-solving was refreshing. It helped our team tackle challenges more effectively and creatively.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 14,
                "reviewee_id" => 11,
                "review_text" =>
                    "You showed great empathy during our discussions. It made a huge difference in how we communicated and worked together.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 14,
                "reviewee_id" => 12,
                "review_text" =>
                    "Your thorough understanding of the subject matter was invaluable. You were always willing to assist others with their questions and concerns.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 14,
                "reviewee_id" => 13,
                "review_text" =>
                    "Your attention to detail ensured that our final submission met all requirements. You truly went above and beyond in your work.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 15,
                "reviewee_id" => 16,
                "review_text" =>
                    "Your support throughout this project made a significant impact. You always ensured that everyone was on the same page and motivated.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 15,
                "reviewee_id" => 17,
                "review_text" =>
                    "I learned a lot from your insights during the project. Your feedback was always constructive and helped me improve my own work.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 15,
                "reviewee_id" => 18,
                "review_text" =>
                    "You were a fantastic team player, always willing to lend a hand when needed. It was a pleasure working alongside you.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 16,
                "reviewee_id" => 15,
                "review_text" =>
                    "Your innovative ideas contributed greatly to our success. Your creativity and resourcefulness were evident throughout the entire process.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 16,
                "reviewee_id" => 17,
                "review_text" =>
                    "Your feedback during the assessment helped us enhance our project quality. Your thoughtful suggestions encouraged our team to aim higher.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 16,
                "reviewee_id" => 18,
                "review_text" =>
                    "You excelled in ensuring our deadlines were met while maintaining quality. Your time management skills were impressive and inspiring.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 17,
                "reviewee_id" => 16,
                "review_text" =>
                    "Your thorough approach to each task led our project to success. You demonstrated a great work ethic and dedication throughout.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 17,
                "reviewee_id" => 15,
                "review_text" =>
                    "You consistently offered support to the entire team. Your willingness to assist others played a big role in keeping our project on track.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 17,
                "reviewee_id" => 18,
                "review_text" =>
                    "You were an outstanding communicator during our project. Your ability to clearly express ideas and thoughts greatly improved our collaboration.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 18,
                "reviewee_id" => 16,
                "review_text" =>
                    "Your leadership skills were evident in how you handled challenges. You always maintained composure and guided us towards solutions.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 18,
                "reviewee_id" => 15,
                "review_text" =>
                    "Your dedication to the project was truly inspiring. You were always available to assist and ensured we stayed focused on our goals.",
                "assessment_id" => 13,
            ],
            [
                "reviewer_id" => 18,
                "reviewee_id" => 17,
                "review_text" =>
                    "Your critical thinking and problem-solving abilities were key to our project's success. You helped us navigate complex issues with ease.",
                "assessment_id" => 13,
            ],
        ]);
    }
}
