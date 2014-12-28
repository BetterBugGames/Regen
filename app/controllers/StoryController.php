<?php

class StoryController extends BaseController {

	private $view;

	private $startover = array('start' => "Start Over", 'credits' => "Read The Credits");

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		$this->view = View::make('base');
	}

	/* Template action
	public function anyAction()
	{
		$paragraphs = array(
			//comma delimited strings,
		);
		$actions = array(
			//comma delimited key => value pairs
			//name => Description
		);

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}
	*/

	public function anyAsk()
	{
		$paragraphs = array(
			"You gesture towards the students and say he can ask them himself. He screams out, mouth frothing, to the
			 scared congregation. At first nobody responds, but you catch the gaze of one young boy with too much acne
			 and too little facial hair.",
			"He tells the dean what you want to hear. Then others chime in and soon there is a cacophony of students all
			 vouching for your story.",
			"He releases you and you glare at each other. Somehow, he knows more than he is letting on but he's going to
			 let it go, for now.",
			"You're going to have to watch out for this one.",
		);
		$actions = $this->startover;

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anyBlood()
	{
		$paragraphs = array(
			"Slick with bright red blood, your hands look strange and alien. You can barely move your fingers as a
			 tingling numbness spreads through them.",
			"The buzzing in your ears becomes a throbbing heartbeat, pounding slower and slower.",
			"The red on your hands is less bright, fading darker along with the rest of the world.",
		);
		$actions = array(
			'succumb' => 'Succumb To The Darkness',
		);

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anyCalm()
	{
		$paragraphs = array(
			"But this power is alien. Never before have you had the upper hand on someone. And now you have the
			 ultimate test. What will you do with it?",
			"You lower back down to the ground and the glow fades from your body. Looking around at the crowd, some
			 stare with disbelief while others refuse to look at you.",
			"A gruff hand grabs your shoulder and spins you around. It's a dean and he wants to know what is going on,
			 whose blood is on the ground, and why you're suddenly the center of attention here.",
		);
		$actions = array(
			'lie' => "Lie And Say Nothing Happened",
			'truth' => "Tell The Truth",
		);

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anyConvince()
	{
		$paragraphs = array(
			"You look up into the dean's eyes and concentrate your thoughts into his mind. His grasp on you shoulder
			 lessens and he looks confused as to where he is.",
			"He's changed his mind, he tells you all. What you told him makes perfect sense. But everyone needs to get
			 back to class.",
			"There is a general shuffle as people shoulder their backpacks and disperse to wherever they're supposed to
			 be.",
			"The dean walks away in a daze from your mental tampering. Surely, just the first of many.",
		);
		$actions = $this->startover;

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anyCredits()
	{
		$paragraphs = array(
			"This interactive fiction game was brought to you by Better Bug Games",
			"You can find out more about us or play our other games at
			 <a href='http://BetterBugGames.com'>BetterBugGames.com</a>",
			"",
			"Programmed by: Jason Quesenberry",
			"Written by: Jason Quesenberry",
			"",
			"Based on a writing prompt from
	<a href=http://www.reddit.com/r/WritingPrompts/comments/2of4p5/wp_one_day_in_high_school_you_unintentionally_get>
			/r/writingprompts</a>",
			"",
			"Written on a machine running Ubuntu 14.04, PhpStorm 8.0.2, PHP 5.5.9, Apache 2.4.7, and Laravel 4.2.11",
			"",
			"Proofreading/playtesting by: ",
			"",
			"Check out the source code at GitHub.com/BetterBugGames/regen",
			"",
			"If you liked reading and playing this adventure try
			 <a href='http://FightLikeAPirate.com'>FightLikeAPirate.com</a> for a text adventure MMO experience.",
		);
		$actions = array(
			'start' => "Play It Again"
		);

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anyDemon()
	{
		$paragraphs = array(
			"You peer into his mind and find what he fears, those adolescent images of pure evil put there to lay the
			 foundation for morality.",
			"Effortlessly, you shift your appearance and the bully's face instantly drains of color.",
			"You have become that which he has always feared yet never truly believed could hurt him. A red, scabbed,
			 and scaly demon. Twisting goat horns rise from your head and a forked tongue lash out.,",
			"The bully has stopped breathing from the fear. It only takes a few seconds and then he passes out on the
			 ground.",
			"When he wakes, most of him will think that it was a dream. But there will be that piece of him which no
			 longer doubts the monsters in the closet. He will see your face in his nightmares for decades.",
		);
		$actions = $this->startover;

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anyDestroy()
	{
		$paragraphs = array(
			"You reach out, mentally, through the space between you and tug. A psychic rope between the two of you pulls
			 taut and he is flying through the air. He comes to a stop a few feet away from you, floating in the air.",
			"Slowly, you rotate him around to face you. He attempts to struggle, but his arms and legs are bound by your
			 mind. He isn't going anywhere.",
		);
		$actions = array(
			'squeeze' => "Squeeze Him",
			'explode' => "Explode Him",
		);

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anyExplode()
	{
		$paragraphs = array(
			"There is a spot right in the bottom center of the human chest where nerves come together in a giant ball.
			 It is this spot which you focus your mind. All your energy, all of your concentration, every piece of you
			 is centered on that spot. On transferring energy.",
			"At first, the onlookers don't comprehend what is happening. The bully's face contorts with pain as you urge
			 his body to give in to your will. And it does.",
			"The hallway is covered in arterial red as the cells of his body give up their bonds and every bit of him
			 is sprayed outwards.",
			"The smell of it invades you. Now you are covered in someone else's blood, instead of just your own. Your
			 skin drinks it in and you can feel the bully's power being pulled into you. Is it possible? Now you feel
			 even more powerful than you did before.",
			"And you want more blood.",
		);
		$actions = $this->startover;

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anyFace()
	{
		$paragraphs = array(
			"Ignoring the meaningless punches he throws your way, you bring both of your hands together and raise them
			 in a ball above your head. You swing them down together and straight into his face.",
			"His body goes limp as his head makes a loud 'thump' against the concrete. You raise your hands together
			 again and bring them down over and over against his face.",
			"You can still see the smile on his face, so you punch it again to erase it.",
			"You can still hear his laughter as he beat you, so you hit him again for silence.",
			"You can still feel the bruises even though they have faded from your powerful body, so you strike him one
			 final time to release the pain.",
			"He will never move again. You stand and walk away. Your time at this place is finished.",
		);
		$actions = $this->startover;

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anyFall()
	{
		$paragraphs = array(
			"Laughter escapes your lips before you can stop it as you release the bully and his screams rip into the
			 air.",
			"There's a moment where he seems to float, but then he's gone, falling and screaming and flailing.",
			"You can feel the emotions pouring out of him as the certainty of death fills his mind while he tumbles to
			 the earth,",
			"It seems to take years, him falling. You look at him from what seems like miles and miles away.",
			"Then it bores you. All of this mortal life bores you. Without waiting to see him splat, you turn your gaze
			 to the heavens and float away from humanity forever.",
		);
		$actions = $this->startover;

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anyFight()
	{
		$paragraphs = array(
			"Without thinking, without considering consequences, before rationalizations, failing to register if it's
			 even in your very nature or not, your fist clenches, knuckles ball, and suddenly your fury has physical
			 presence as you assault back.",
	        "You no longer care if you get hurt, just that you hurt.",
	        "You don't feel the pain as his harder, faster, more accurate fists strike back.",
			"It isn't about what he'll do to you anymore; it's about not just sitting back and letting it happen.",
        	"It seems for a moment that your unleashed rage may have driven the foe back, that he isn't quite up for
			 punching something which punches back.",
        	"Then you feel the pain, spreading slowly from your gut and numbing everything else. The buzzing in your
			 ears intensifies as all the sounds of the world fade away.",
        	"You look down at the bright red stain on your shirt. A hunting knife protrudes from the center of the
        	 blood.",
		);
		$actions = array(
			'pull' => "Pull It Out",
			'pressure' => "Apply Pressure To The Wound",
		);

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anyFly()
	{
		$paragraphs = array(
			"You grab him by the scruff of his jacket and then the two of you are rising, air rushes around you, and
			 then you pause.",
			"His eyes flit frantically back and forth as he surveys the school from this impossible height",
			"He struggles, moves his arms wildly, then has the audacity to beg you, as if he hadn't just stabbed you",
			"You release him.",
		);
		$actions = array(
			'save' => "Save Him At The Last Second",
			'fall' => "Let Him Fall",
		);

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anyHand()
	{
		$paragraphs = array(
			"The next time his fist flies towards your face, you catch it with your own hand and grip it tight.",
			"He struggles to continue pushing it towards you momentarily, then tries to wrench it free when your
			 superior strength is obvious, but you continue to hold his fist.",
			"Slowly, you increase the pressure. He gasps, then cries out, and then he screams. You simply continue to
			 increase the pressure, crushing bone, tendon, and muscle alike into one soft lump.",
			"As his body thrashes, you finally release the useless pile of broken flesh that once terrorized you so.",
			"You stand as he curls into a sobbing ball. That fist will never punch again.",
		);
		$actions = $this->startover;

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anyHurt()
	{
		$paragraphs = array(
			"As you come gliding around a corner, you see him sauntering along. Leaning forward, you launch forward with
			 a burst of speed and tackle him to the ground.",
			"He twists and flails in automatic response. You let him struggle onto his back to he can see you.",
			"His eyes widen for a moment as he realizes who you are, then his fist strikes your face. Again and again
			 he hits you and panic starts to set in as you merely laugh at his feeble punches.",
			"It's time he knew true strength.",
		);
		$actions = array(
			'hand' => "Break His Hand",
			'face' => "Break His Face",
			'will' => "Break His Will",
		);

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anyLie()
	{
		$paragraphs = array(
			"You tell him nothing happened at that it was all just a joke. He obviously doesn't believe you.",
			"He demands that someone tell him what's going on and why there was screaming. Why someone said there was a
			 stabbing.",
		);
		$actions = array(
			'ask' => "Ask The Students To Corroborate",
			'convince' => "Convince Him",
		);

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anyPower()
	{
		$paragraphs = array(
			"A wind comes from nowhere and gently lifts you a foot above the ground. The students stare at you. One
			 girl turns and begins to flee but the wind picks her up as well and brings her close to you. The yellow
			 glow of your skin lights her up as the wind knocks her hair about. She doesn't struggle.",
	        "The power rushes through your blood, the exhilaration of the moment intoxicates you, and you understand
	         the full extent of your own power. The fools around you have no idea what you are capable of.",
		);
		$actions = array(
			'show' => "Show Them",
			'safe' => "Let The Girl Go",
		);

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anyPressure()
	{
		$paragraphs = array(
			"You press your hands to your stomach with fading strength. You feel the blade stuck inside, a foreign
			 object intent on ripping and tearing what is left of your intestines. All around you, people shuffle.
			 Someone is shouting but you can't understand the words. There is only the pain.",
	        "And the blood.",
		);
		$actions = array(
			'blood' => "Look At Your Blood Soaked Hands",
		);

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anyPull()
	{
		$paragraphs = array(
			"Pain rips through you again as you grasp the polished wooden handle and yank the knife out. You're dimly
			 aware of a new rush of blood falling to the floor as the knife falls from your numb fingers. Then the world
			 is white as your face collides with the tiles of the hall. Somewhere far, far away, someone screams.",
		);
		$actions = array(
			'blood' => "Inspect Your Blood Soaked Hands",
		);

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anyRevenge()
	{
		$paragraphs = array(
			"The one who did this to you must pay. He must not be allowed to wreak his terror on the unwilling any
			 longer. But he isn't here anymore. You can feel his presence fading from here. The coward fled the moment
			 he realized what he had done.",
        	"With a wave of your hand, the gawking students are flung to the sides of the hallway and into the lockers
	         normally used to bear the impact of your body.",
	        "Effortlessly, you glide down the hallway in the direction of the bully, following his scent. You can feel
			 his fear, taste the adrenaline. He's scared. But he liked it.",
        	"Not for long. He is near.",
		);
		$actions = array(
			'scare' => "Scare Him",
		    'hurt' => "Hurt Him",
    		'destroy' => "Destroy Him",
		);

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anyRise()
	{
		$paragraphs = array(
			"You rise effortlessly amid gasps and screams from those around you. It's obvious why.",
        	"Your hands are not glowing orange, but yellow, bright enough to shine through your blood.",
        	"Your hands are hot, pulsing with power. The heat burns through the blood and then your whole body glows.",
        	"The power rips through you. It feels good. Really good.",
		);
		$actions = array(
			'revenge' => "Find The One Who Stabbed You",
		    'power' => "Demonstrate Your Power",
    		'calm' => "Calm Down",
		);

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anySafe()
	{
		$paragraphs = array(
			"You look around at the terror filled students. Each one exudes fear and you can feel the rawness of their
			 emotions. Looking inside yourself, you recognize that fear as what you used to feel daily. And now you are
			 the one inflicting it on them.",
			"You gently lower the girl to the ground and release her.",
			"'Go,' you whisper. Everyone there hears to as if you whispered it directly into their own ear and each
			 understands that it applies to them equally.",
			"They will be safe from you. And from any that cross your path.",
		);
		$actions = $this->startover;

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anySave()
	{
		$paragraphs = array(
			"He screams as he falls, a blood curdling cry filled with primal fear",
			"But you are there to gently soften him to the ground",
			"He is shaking and his pants are wet. And you know he'll never trouble those weaker than himself again.",
			"You lift back into the air and fly away.",
		);
		$actions = $this->startover;

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anyScare()
	{
		$paragraphs = array(
			"You come up behind the bully, a freshly lit cigarette puffing from his lips. You smile as you decide what
			 to do to him",
			"The cigarette explodes in a fireball and the bully falls backwards and hits the ground,",
			"Bewildered, he scoots back and strikes your legs. He looks up at you and screams.",
		);
		$actions = array(
			'fly' => "Fly Him Into The Air",
			'demon' => "Show Him True Evil",
		);

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anyShow()
	{
		$paragraphs = array(
			"The girl begins to glow the same yellow as you. She seems shocked and amazed...at first. As the glow
			 envelops her, her expression changes and she tries to scream.",
			"No sound comes out of her mouth but she writhes in pain. She tries to shield her eyes with her arms, but
			 they, too, glow with a brightness that is painful to everyone's gaze but your own.",
			"The glow becomes so intense it is like she is encased in a golden bubble. Tiny bolts of lightning crackle
			 and spark along it's surface.",
			"Then, as if she had never even existed at all, the bubble collapses to a single bright point and
			 disappears.",
			"You lower slowly back down to the ground, trying to make eye contact with any of the witnesses.",
			"Nobody matches your gaze.",
		);
		$actions = $this->startover;

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anySqueeze()
	{
		$paragraphs = array(
			"You squeeze the mental force you use to keep the bully in place. He almost squeaks as the air is forced
			 from his lungs and his face turns red.",
			"Like a tube of toothpaste, you exert pressure against his chest. His face is more purple than red.",
			"There is a massive crack as his body gives way. He goes limp and someone screams.",
			"You drop him to the floor. A small stream of pink bubbles oozes from his mouth. The kids scatter down the
			 halls. Nobody is going to forget this day.",
		);
		$actions = $this->startover;

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anyStart()
	{
		$paragraphs = array(
			"The air seems to thicken as your body slams into a bright red locker, one of many lining the school
        	 hallways. As usual, when the bullies come out of the woodwork to ply their trade on your muscles and
        	 bones more calibrated towards reading and sitting at a desk than throwing balls or punches, time seems
        	 to slow, your breath comes in thick clouds, and the cacophony of fellow students cheering is drowned
        	 by a viscous humming that drowns out everything else. You only have to wait this out...",
        	"Eventually it will be over, just like every time before.",
		);
		$actions = array(
	    	'fight' => "Fight Back",
			'wait' => "Just Wait It Out",
		);

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anySuccumb()
	{
		$paragraphs = array(
			"As the darkness encloses you, it feels like a warm blanket wrapping you up on a cold winter day. You don't
			 feel scared, or angry, or anything but content.",
        	"Your hands don't even seem red anymore, but more orange. Like hot metal just removed from a fire.",
        	"The throbbing heartbeat in your ears has sped up as well, become stronger. Steady. Deep.",
        	"And you realize you can see just fine. You look around at the other students, most of them horrified, a
			 few just sad.",
        	"The pain is gone.",
		);
		$actions = array(
			'rise' => "Rise",
		);

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anyTruth()
	{
		$paragraphs = array(
			"Slowly, you reach up and remove the hand from your shoulder and turn to face the dean. Without flinching,
			 you tell him that a bully beat you, stabbed you, and left you for dead. But, you rose again, stronger than
			 before.",
			"As you speak, the dean slowly backs away. You can't tell if he believes you or not but he seems averse to
			 your touch and continues to back up as you walk forward.",
			"You tell him that you're done being a doormat and that things around the school are going to change. No
			 longer will things like this happen while the faculty turns a blind eye and the student body collectively
			 cheers it on.",
			"He nods frantically while continuing to back away from you.",
			"You tell him to spread the word. There is a new pecking order here.",
		);
		$actions = $this->startover;

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anyWait()
	{
		$paragraphs = array(
			"The punches come after the pushing fails to elicit a response, just like every time before this. The pain
			 comes but it's just another thing to endure, something else that has to happen in this moment so that all
			 of the rest of the moments of your life can happen.",
        	"But there's something...different about today. You can already feel it as the hits come with a little more
        	 energy, a little bit more desperation. You think of calling out for help, even though nobody who watches
        	 these shows ever would, because while these things never feel right, today feels especially wrong.",
        	"The moment comes while you're about to open your mouth. A sharpness, then dull pain spreading outwards from
 			 your gut.",
        	"You look down at the bright red stain on your shirt. A hunting knife protrudes from the center of the
        	 blood.",
		);
		$actions = array(
			'pull' => "Pull It Out",
			'pressure' => "Apply Pressure To The Wound",
		);

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}

	public function anyWill()
	{
		$paragraphs = array(
			"The next moments come naturally, without any effort on your part. You lean forward and stare into his eyes
			 and they turn glassy and distant.",
			"You are now in his mind, wandering around his halls of consciousness as a casual visitor.",
			"One corridor holds his dreams and aspirations. Another his fears. Still another contains doors leading to
			 all the moments of his life that he is ashamed of. This corridor is long.",
			"A sledgehammer is now in your hand. You walk along his corridor of shame and smash open each door.",
			"Some are locked and bolted and attempt to keep you out but the contents come spilling out anyway.",
			"At the end of the corridor you pause and look back. All of his deepest shames are now unleashed in his mind
			 and he is unable to hide any of them behind doors only he knows about. His shames will always be there,
			 right at the forefront of his thoughts.",
			"You continue on down the corridor and into the bright light at the end of it.",
		);
		$actions = $this->startover;

		return View::make('layout', array('paragraphs' => $paragraphs, 'actions' => $actions));
	}
}
