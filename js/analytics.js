analytics().logEvent('notification_received');

firebase.analytics.logEvent('select_content', {
    content_type: 'image',
    content_id: 'P12453',
    items: [{ name: 'Kittens' }]
  });


  analytics.logEvent('goal_completion', { name: 'lever_puzzle'});

  firebase.analytics().setUserProperties({favorite_food: 'apples'});

  Analytics.setUserID("123456");
