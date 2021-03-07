@if($isOpen == null)
    <div class="card shadow-1-strong">
        <div class="card-header">
            <h2 class="m-0 text-dark text-truncate">Table of Contents</h2>
        </div>
        <div class="card-body">
            <div class="list-group">
                <button href="#" class="list-group-item list-group-item-action" wire:click="openBiodata()">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mt-2">1) Biodata</h5>
                    </div>
                    <p class="mb-2">Who am i?</p>
                </button>
                <button href="#" class="list-group-item list-group-item-action" wire:click="openTimeline()">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mt-2">2) Timeline</h5>
                    </div>
                    <p class="mb-2">How do i get here?</p>
                </button>
                <button href="#" class="list-group-item list-group-item-action" wire:click="openHobby()">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mt-2">3) Hobby</h5>
                    </div>
                    <p class="mb-2">What do i like?</p>
                </button>
                <button href="#" class="list-group-item list-group-item-action" wire:click="openMore()">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mt-2">4) More...?</h5>
                    </div>
                    <p class="mb-2">The more... the merrier?</p>
                </button>
                <button href="#" class="list-group-item list-group-item-action" wire:click="openContent()">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mt-2">5) Content</h5>
                    </div>
                    <p class="mb-2">What do i deliver?</p>
                </button>
                <button href="#" class="list-group-item list-group-item-action" wire:click="openCredit()">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mt-2">6) Credit</h5>
                    </div>
                    <p class="mb-2">I owe them so much <i class="fas fa-heart text-danger"></i></p>
                </button>
                <button href="#" class="list-group-item list-group-item-action" wire:click="openRequest()">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mt-2">7) Request</h5>
                    </div>
                    <p class="mb-2">My request to you~</p>
                </button>
                <button href="#" class="list-group-item list-group-item-action" wire:click="openGoal()">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mt-2">8) Goal</h5>
                    </div>
                    <p class="mb-2">What do i want to achieve?</p>
                </button>
                <button href="#" class="list-group-item list-group-item-action" wire:click="openMaro()">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mt-2">9) Maro</h5>
                    </div>
                    <p class="mb-2">Do i have Maro?</p>
                </button>
            </div>
        </div>
    </div>
@elseif($isOpen == 'biodata')
    <div class="card shadow-1-strong">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h2 class="m-0 text-dark text-truncate">Biodata</h2>
                </div>
                <div class="col-4">
                    <button wire:click="closeInput()" class="btn btn-block btn-danger">Close</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <dl class="row m-0">
                <dt class="col-3">Name</dt>
                <dd class="col-9"><abbr title="Black Bear">Kurokuma</abbr> <abbr title="Young Leaf">Wakaba</abbr><br/><small>Waka</small></dd>
                <dt class="col-3">Date of Birth</dt>
                <dd class="col-9">April 24</dd>
                <dt class="col-3">Height</dt>
                <dd class="col-9"><small>163 cm</small></dd>
                <dt class="col-3">Language</dt>
                <dd class="col-9">Indonesia, English</dd>
            </dl>
        </div>
    </div>
@elseif($isOpen == 'timeline')
    <div class="card shadow-1-strong">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h2 class="m-0 text-dark text-truncate">Timeline</h2>
                </div>
                <div class="col-4">
                    <button wire:click="closeInput()" class="btn btn-block btn-danger">Close</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="main-timeline">
                <div class="timeline">
                    <div class="icon"></div>
                    <div class="date-content">
                        <div class="date-outer">
                            <span class="date">
                                <span class="month">Graduate</span>
                                <span class="year">2019</span>
                            </span>
                        </div>
                    </div>
                    <div class="timeline-content">
                        <h5 class="title">Kurokuma Wakaba, S.Kom</h5>
                        <div class="description">
                            <p>Graduated from college in April 2019, then looking for a job that matches my degree.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline">
                    <div class="icon"></div>
                    <div class="date-content">
                        <div class="date-outer">
                            <span class="date">
                                <span class="month">First Job</span>
                                <span class="year">2019</span>
                            </span>
                        </div>
                    </div>
                    <div class="timeline-content">
                        <h5 class="title">First Probation</h5>
                        <div class="description">
                            <p>Got my first job at some national company as a programmer in June 2019. I was working ±10 hours a day, six days a week.</p>
                            <p>My body collapse: I can't stand, since my feet paralyzed. I take break from works for treatment after confirming to management. But after about 3 weeks worth of treatment, the management has different idea: "We could just fired him."</p>
                            <p>So i was fired because of overworking. Lmao.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline">
                    <div class="icon"></div>
                    <div class="date-content">
                        <div class="date-outer">
                            <span class="date">
                                <span class="month">Therapy</span>
                                <span class="year">2019</span>
                            </span>
                        </div>
                    </div>
                    <div class="timeline-content">
                        <h5 class="title">Trying to Stand</h5>
                        <p class="description">I tried to seek treatment in many places: modern as well as traditional. Thank god i was recovered on December 2020. I could walk again.</p>
                    </div>
                </div>
                <div class="timeline">
                    <div class="icon"></div>
                    <div class="date-content">
                        <div class="date-outer">
                            <span class="date">
                                <span class="month">Freelancer</span>
                                <span class="year">2020</span>
                            </span>
                        </div>
                    </div>
                    <div class="timeline-content">
                        <h5 class="title">Don't trust too much</h5>
                        <div class="description">
                            <p>In January 2020, I got an offer to make a web application from one of my college friends. Since this is an opportunity to redeem my lost time last year, I worked on the offer to my best.</p>
                            <p>Because I'm still naive, green and too trusting, i do my grave mistake: Working without contract and delivering the full product without any down payment.</p>
                            <p>Projects worth tens of millions are now only paid for as much as one million.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline">
                    <div class="icon"></div>
                    <div class="date-content">
                        <div class="date-outer">
                            <span class="date">
                                <span class="month">Pandemic</span>
                                <span class="year">2020</span>
                            </span>
                        </div>
                    </div>
                    <div class="timeline-content">
                        <h5 class="title">COVID Arc</h5>
                        <div class="description">
                            <p>COVID 19 is now the game master.</p>
                            <p>I spend 12 hour per day to learning something new: Laravel. I do this everyday, like i swear.</p>
                            <p>I tried to apply to ±100 company. Do interview everyday to no avail.</p>
                            <p>tired.png</p>
                        </div>
                    </div>
                </div>
                <div class="timeline">
                    <div class="icon"></div>
                    <div class="date-content">
                        <div class="date-outer">
                            <span class="date">
                                <span class="month">Rabbit Hole</span>
                                <span class="year">2021</span>
                            </span>
                        </div>
                    </div>
                    <div class="timeline-content">
                        <h5 class="title">Self Exploration</h5>
                        <div class="description">
                            <p>You know, it's new years eve; The perfect time to stack resolution!</p>
                            <p>My 2021 resolution is simple: No more interview, less programming. Please god.</p>
                            <p>One night watching PT gameplay: Fubuki and Matsuri. Great, welcome to the rabbit hole!</p>
                            <p>Found out that there's Indonesian branch of Hololive and Nijisanji.</p>
                            <p>Found out that there's Indonesian independent VTuber.</p>
                            <p>Could i?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@elseif($isOpen == 'hobby')
    <div class="card shadow-1-strong">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h2 class="m-0 text-dark text-truncate">Hobby</h2>
                </div>
                <div class="col-4">
                    <button wire:click="closeInput()" class="btn btn-block btn-danger">Close</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <dl class="row m-0">
                <dt class="col-3">Gaming</dt>
                <dd class="col-9">
                    <ol>
                        <li>
                            <label>MOBA</label>
                            <br/>
                            <small>Dota</small>
                        </li>
                        <li>
                            <label>RPG Simulation</label>
                            <br/>
                            <small>Story of Seasons: Friends of Mineral Town, Rust, Monster Hunter: World, etc</small>
                        </li>
                        <li>
                            <label>Racing</label>
                            <br/>
                            <small>The Crew 2, Need for Speed Franchise, etc</small>
                        </li>
                        <li>
                            <label>FPS</label>
                            <br/>
                            <small>CS:GO, <abbr title="PS: I sucks on battle royale">APEX Legends</abbr>, etc</small>
                        </li>
                    </ol>
                </dd>
                <dt class="col-3">Music</dt>
                <dd class="col-9">
                    <ol>
                        <li>
                            <label>Utaite</label>
                            <br/>
                            <small>Reol, nqrse, 96Neko, Kradness, etc</small>
                        </li>
                        <li>
                            <label>Vocaloid</label>
                            <br/>
                            <small>Giga, Hitoshizuku, etc</small>
                        </li>
                        <li>
                            <label>Anisong</label>
                            <br/>
                            <small>Egoist, Lisa</small>
                        </li>
                    </ol>
                </dd>
                <dt class="col-3">Reading</dt>
                <dd class="col-9">
                    <ol>
                        <li>
                            <label>Manga & Manhwa, <strike>Manhua</strike></label>
                            <br/>
                            <small>Adventure, Comedy, Fantasy, Historical, Horror, Isekai, Josei, Medical, Tragedy, Yuri</small>
                        </li>
                    </ol>
                </dd>
                <dt class="col-3">Watching</dt>
                <dd class="col-9">
                    <ol>
                        <li>Anime</li>
                        <li>Western</li>
                        <li>Korean Drama</li>
                    </ol>
                </dd>
            </dl>
        </div>
    </div>
@elseif($isOpen == 'more')
    <div class="card shadow-1-strong">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h2 class="m-0 text-dark text-truncate">The More You Know</h2>
                </div>
                <div class="col-4">
                    <button wire:click="closeInput()" class="btn btn-block btn-danger">Close</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover border-dark text-dark">
                <thead class="text-center">
                    <tr>
                        <th></th>
                        <th>Like</th>
                        <th>Dislike</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Animal</td>
                        <td>Cat, Dog, Hamster</td>
                        <td>Insect, Arachnids</td>
                    </tr>
                    <tr>
                        <td>Weather</td>
                        <td>Cold</td>
                        <td>Hot, Heavy Rain</td>
                    </tr>
                    <tr>
                        <td>Food</td>
                        <td>Chicken</td>
                        <td>Sweet Corn</td>
                    </tr>
                    <tr>
                        <td>Drink</td>
                        <td>Coffee, Tea, Milk</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Person</td>
                        <td>Hard Working, Polite</td>
                        <td>Impolite</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@elseif($isOpen == 'content')
    <div class="card shadow-1-strong">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h2 class="m-0 text-dark text-truncate">Content</h2>
                </div>
                <div class="col-4">
                    <button wire:click="closeInput()" class="btn btn-block btn-danger">Close</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <dl class="row m-0">
                <dt class="col-3">Gaming</dt>
                <dd class="col-9">
                    <ol>
                        <li>
                            <label>Games</label>
                            <br/>
                            <small><abbr title="First time playing">Blind Playthrough</abbr>, <abbr title="Playing chill game while talking">Chill and Play</abbr>, <abbr title="Playing game with friends">Party</abbr></small>
                        </li>
                    </ol>
                </dd>
                <dt class="col-3">Tutorial</dt>
                <dd class="col-9">
                    <ol>
                        <li>
                            <label><abbr title="I'm noob, tho">Programming</abbr></label>
                            <br/>
                            <small>Laravel</small>
                        </li>
                        <li>
                            <label>Server</label>
                            <br/>
                            <small>Basic, Certain Purpose</small>
                        </li>
                        <li>
                            <label>Free Talk</label>
                            <br/>
                            <small>Fixed Topic, Random Topic, Counseling</small>
                        </li>
                    </ol>
                </dd>
            </dl>
        </div>
    </div>
@elseif($isOpen == 'credit')
    <div class="card shadow-1-strong">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h2 class="m-0 text-dark text-truncate">Credit</h2>
                </div>
                <div class="col-4">
                    <button wire:click="closeInput()" class="btn btn-block btn-danger">Close</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <dl class="row m-0">
                <dt class="col-3">Wahid</dt>
                <dd class="col-9">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <img src="https://cdn.discordapp.com/attachments/803944842413604875/818026171019165766/Sketch.jpg" height="600px" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Sketch</h5>
                                    <p class="card-text">Initial sketch.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <img src="https://cdn.discordapp.com/attachments/803944842413604875/814517102811152394/WakaIdle.png" height="600px" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Final</h5>
                                    <p class="card-text">Final sketch.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </dd>
                <hr/>
                <dl class="row m-0">
                <dt class="col-3">Yuji & Hatsumi</dt>
                <dd class="col-9">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <img src="https://cdn.discordapp.com/attachments/803944842413604875/818032216595890176/Sketch_Yuji.png" height="600px" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Chibi Sketch</h5>
                                    <p class="card-text">Initial chibi sketch.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <img src="https://cdn.discordapp.com/attachments/803944842413604875/818032382611030056/Art_Yuji.png" height="600px" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Final</h5>
                                    <p class="card-text">Final chibi sketch.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </dd>
        </div>
    </div>
@elseif($isOpen == 'request')
    <div class="card shadow-1-strong">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h2 class="m-0 text-dark text-truncate">Request</h2>
                </div>
                <div class="col-4">
                    <button wire:click="closeInput()" class="btn btn-block btn-danger">Close</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <dl class="row m-0">
                <dt class="col-3">You can:</dt>
                <dd class="col-9">
                    <ol class="m-0">
                        <li><abbr title="Like a backseat driver, a backseat gamer is a person who tells you what to do in a game that you're playing while you're playing it.">Backseating</abbr>*</li>
                        <li>Talk about another VTuber</li>
                    </ol>
                </dd>
                <hr/>
                <dt class="col-3">You can not:</dt>
                <dd class="col-9">
                    <ol class="m-0">
                        <li>Spaming</li>
                        <li>Out of Topic</li>
                        <li>Harmful Trolling</li>
                        <li>Foul mouth: trash talk, swearing, bashing, etc</li>
                        <li>Commenting about sensitive topics: race, politics, religion, etc - <abbr title="Suku, Agama, Ras, Antargolongan">SARA</abbr></li>
                    </ol>
                </dd>
            </dl>
        </div>
    </div>
@elseif($isOpen == 'goal')
    <div class="card shadow-1-strong">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h2 class="m-0 text-dark text-truncate">Goals</h2>
                </div>
                <div class="col-4">
                    <button wire:click="closeInput()" class="btn btn-block btn-danger">Close</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <dl class="row m-0">
                <dt class="col-3">Short Term:</dt>
                <dd class="col-9">
                    <ol class="m-0">
                        <li>Reach a few thousand subscriber</li>
                        <li>Do at least >3 stream / content per week</li>
                    </ol>
                </dd>
                <hr/>
                <dt class="col-3">Long Term:</dt>
                <dd class="col-9">
                    <ol class="m-0">
                        <li>Entertaining people</li>
                        <li>Having a lot of friend</li>
                        <li>Share or/and get new knowledge</li>
                    </ol>
                </dd>
            </dl>
        </div>
    </div>
@elseif($isOpen == 'maro')
    <div class="card shadow-1-strong">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h2 class="m-0 text-dark text-truncate">This is not Maro tho wwwwww</h2>
                </div>
                <div class="col-4">
                    <button wire:click="closeInput()" class="btn btn-block btn-danger">Close</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <p class="m-0">This is a place where i don't know where to put the topic. So yeah...</p>
            <ul class="m-0">
                <li>Do i have Maro / Fanbox / etc?</li>
                <li>Would i do a collab?</li>
                <li>Would i do karaoke stream?</li>
                <li>Would i do endurance stream?</li>
                <li>Would i monetize the channel?</li>
            </ul>
        </div>
    </div>
@endif