<?php

use Illuminate\Database\Seeder;

class FlipflopsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('flipflops')->insert([
			'title' => "Supporting TPP",
			'summary' => "Hillary Clinton claims to be opposed to the TPP during the 2016 election cycle but originally supported it as secretary of state.",
			'flip' => "So it's fair to say that our economies are entwined, and we need to keep upping our game both bilaterally and with partners across the region through agreements like the Trans-Pacific Partnership or TPP. Australia is a critical partner. This TPP sets the gold standard in trade agreements to open free, transparent, fair trade, the kind of environment that has the rule of law and a level playing field. And when negotiated, this agreement will cover 40 percent of the world's total trade and build in strong protections for workers and the environment.",
			'flop' => "And make no mistake, we will defend American jobs and American workers by saying no to the assault on the right to organize and bargain collectively.
				<br />
				And we’re going to say no to attacks on working families and no to bad trade deals and unfair trade practices, including the Trans- Pacific Partnership.",
			'source_type' => "text",
			'flip_source' => "08/11/2012 - <a href='http://www.state.gov/secretary/20092013clinton/rm/2012/11/200565.htm'> state.gov transcript  </a>",
			'flop_source' => "07/12/2016 - <a href ='http://time.com/4403264/bernie-sanders-hillary-clinton-endorsement-full-transcript/'> Full transcript of Bernie Sanders' endorsement of Hillary Clinton </a>",
			'politician_id' => 2
		]);

		DB::table('flipflops')->insert([
			'title' => "Accepting the Outcome of the Election",
			'summary' => "Donald Trump switches positions on whether he would accept the results of the election.",
			'flip' => "I want to make America great again. I'm going to be able to do it, I don't believe Hillary will. The answer is if she wins, I will absolutely support her.",
			'flop' => "Chris Wallace: There is a tradition in this country, in fact one of the prides of this country, is the peaceful transition of power, and that no matter how hard fought a campaign is, that at the end of the campaign, that the loser concedes to the winner.  Are you saying that you're not prepared to -- <br/> Donald Trump: What I'm saying is that I will tell you at the time, I'll keep you in suspense. Okay?",
			'source_type' => "text",
			'flip_source' => "09/26/2016 - <a href='https://www.youtube.com/watch?v=ZEHPrYUcoi0'> First Presidential Debate </a>",
			'flop_source' => "10/19/2016 - <a href='https://www.youtube.com/watch?v=cP0G4vJ5OMw'> Third Presidential Debate </a>",
			'politician_id' => 1
		]);

		DB::table('flipflops')->insert([
			'title' => "On abortion",
			'summary' => "Mitt Romney flip-flops from pro-choice to pro-life when running for president in 2012.",
			'flip' => "I believe that abortion should be safe and legal in this country. I believe that since Roe v. Wade has been the law for 20 years, it should be sustained and supported. And I sustain and support that law and support the right of a woman to make that choice.",
			'flop' => "I am pro-life and believe that abortion should be limited to only instances of rape, incest, or to save the life of the mother. I support the reversal of Roe v. Wade, because it is bad law and bad medicine. Roe was a misguided ruling that was a result of a small group of activist federal judges legislating from the bench. I support the Hyde Amendment, which broadly bars the use of federal funds for abortions. And as president, I will support efforts to prohibit federal funding for any organization like Planned Parenthood, which primarily performs abortions or offers abortion-related services.",
			'source_type' => "text",
			'flip_source' => "10/25/1994 - <a href='https://www.youtube.com/watch?v=ECVyuz5iNyQ'> 1994 Senatorial Debate between Mitt Romney and Edward Kennedy",
			'flop_source' => "06/18/2011 - <a href='http://www.nationalreview.com/corner/269984/my-pro-life-pledge-mitt-romney'> Mitt Romney op-ed about his pro-life position for National Review </a>",
			'politician_id' => 3
		]);
	}
}
