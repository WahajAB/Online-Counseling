@extends('layouts.app')
@section('content')
<link href="{{ asset('css/green-theme.css') }}" rel="stylesheet">
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner" data-bs-interval="200" style="margin-top:2rem; margin-bottom:2rem; padding-bottom: 5rem;">
      <div class="carousel-item active">
        <div class="container">
        <div class="card">
                        <div class="card-header text-center" style="font-size: 1.5rem; font-weight: 700;">Understanding Anxiety Disorders</div>
                        <div class="card-body" style="font-size: 1.1rem;">
                        <p>Anxiety disorders are common mental health conditions that involve excessive worry, fear, and
                            unease. They can manifest in various forms, such as generalized anxiety disorder (GAD), panic
                            disorder, social anxiety disorder, and specific phobias. These disorders can significantly
                            impact an individual's daily functioning and quality of life.</p>
                        <p>Treatment options for anxiety disorders may include:</p>
                        <ul>
                            <li>Cognitive-behavioral therapy (CBT): A therapeutic approach that helps individuals identify
                                and modify negative thought patterns and behaviors associated with anxiety.</li>
                            <li>Exposure therapy: A form of therapy that gradually exposes individuals to the situations or
                                objects that trigger their anxiety, helping them build resilience and reduce fear.</li>
                            <li>Relaxation techniques: Techniques like deep breathing, meditation, and mindfulness can help
                                individuals manage anxiety symptoms and promote relaxation.</li>
                        </ul>
                    </div>
                </div>
            </div>
      </div>
      <div class="carousel-item">
        <div class="container">
        <div class="card">
                        <div class="card-header text-center" style="font-size: 1.5rem; font-weight: 700;">Depression: Causes and Treatments</div>
                        <div class="card-body" style="font-size: 1.1rem;">
                        <p>Depression is a mood disorder characterized by persistent feelings of sadness, loss of interest,
                            and a lack of motivation. It can be caused by a combination of genetic, biological,
                            environmental, and psychological factors. Depression can significantly impair daily functioning
                            and negatively impact overall well-being.</p>
                        <p>Treatment options for depression may include:</p>
                        <ul>
                            <li>Therapy (such as cognitive-behavioral therapy or interpersonal therapy): These approaches
                                help individuals identify and change negative thought patterns, develop coping strategies,
                                and improve interpersonal relationships.</li>
                            <li>Medication (such as selective serotonin reuptake inhibitors): Antidepressant medications can
                                help regulate neurotransmitter imbalances and alleviate depressive symptoms.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      <div class="carousel-item">
        <div class="container">
            <div class="card">
                            <div class="card-header text-center" style="font-size: 1.5rem; font-weight: 700;">Understanding Dual Diagnosis</div>
                            <div class="card-body" style="font-size: 1.1rem;">
                        <p>Dual diagnosis refers to the co-occurrence of a mental health disorder and a substance use
                            disorder. It is common for individuals with mental health conditions to turn to substances as a
                            way to cope with their symptoms, leading to a dual diagnosis. This complex combination requires
                            a comprehensive and integrated treatment approach.</p>
                        <p>Treatment for dual diagnosis may involve:</p>
                        <ul>
                            <li>Integrated assessment and treatment: A thorough evaluation is conducted to assess both the
                                mental health and substance use aspects, allowing for a tailored treatment plan that
                                addresses both conditions simultaneously.</li>
                            <li>Therapy and counseling: Evidence-based therapies, such as integrated cognitive-behavioral
                                therapy (ICBT) or dialectical behavior therapy (DBT), can help individuals develop coping
                                skills, manage cravings, and address underlying emotional issues.</li>
                            <li>Support groups and peer support: Engaging in support groups and connecting with others who
                                have experienced similar challenges can provide validation, encouragement, and a sense of
                                community during the recovery process.</li>
                        </ul>
                    </div>
                </div>
        </div>
    </div>
    <div class="carousel-item">
            <div class="container">
                <div class="card">
                                <div class="card-header text-center" style="font-size: 1.5rem; font-weight: 700;">Substance Abuse and Addiction</div>
                                <div class="card-body" style="font-size: 1.1rem;">
                        <p>Substance abuse refers to the harmful or excessive use of drugs or alcohol, which can lead to
                            addiction. Addiction is a chronic brain disease that affects the reward and motivation systems,
                            making it difficult for individuals to control their substance use despite negative
                            consequences.</p>
                        <p>Treatment options for substance abuse and addiction may include:</p>
                        <ul>
                            <li>Cognitive-behavioral therapy (CBT): This therapy helps individuals recognize and change
                                patterns of thinking and behavior that contribute to substance abuse. It focuses on
                                developing coping skills and relapse prevention strategies.</li>
                            <li>Motivational interviewing (MI): MI is a client-centered therapy that aims to enhance an
                                individual's motivation and commitment to change their addictive behaviors.</li>
                            <li>Support groups: Joining support groups like Alcoholics Anonymous (AA) or Narcotics Anonymous
                                (NA)can provide individuals with a supportive community and resources to aid in their
                                recovery journey.</li>
                            <li>Medication-assisted treatment (MAT): In certain cases, medications may be prescribed to help
                                reduce cravings, manage withdrawal symptoms, and support recovery from substance abuse.</li>
                            <li>Prevention programs: Educating individuals about the risks and consequences of substance
                                abuse, promoting healthy coping skills, and fostering a supportive environment can help
                                prevent drug abuse.</li>
                        </ul>
                    </div>
                </div>
        </div>
    </div>
    <div class="carousel-item">
        <div class="container">
            <div class="card">
                            <div class="card-header text-center" style="font-size: 1.5rem; font-weight: 700;">Managing Stress and Building Resilience</div>
                            <div class="card-body" style="font-size: 1.1rem;">
                        <p>Stress is a natural response to challenging or demanding situations, but chronic or excessive
                            stress can negatively impact mental and physical well-being. Learning effective stress
                            management techniques can help individuals cope with stressors more effectively and promote
                            overall resilience.</p>
                        <p>Some strategies for managing stress and building resilience include:</p>
                        <ul>
                            <li>Practicing relaxation techniques: Techniques like deep breathing, progressive muscle
                                relaxation, and mindfulness can help reduce stress and promote a sense of calm.</li>
                            <li>Engaging in regular exercise: Physical activity can help reduce stress, improve mood, and
                                increase resilience.</li>
                            <li>Developing healthy coping mechanisms: This involves identifying and implementing strategies
                                such as problem-solving, time management, and assertiveness skills to effectively deal with
                                stressors.</li>
                            <li>Building a support system: Having a network of supportive relationships can provide
                                emotional support, practical assistance, and a sense of belonging, which can enhance
                                resilience in the face of stress.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <button class="carousel-control-prev" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
@endsection
