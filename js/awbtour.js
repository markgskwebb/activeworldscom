	// Define the tour!
    var tour = {
      id: "awbtour1",
      steps: [
        {
          title: "Welcome to the ActiveWorlds Tour",
          content: "This tutorial will walk you through using the ActiveWorlds browser. Press [Next] to continue.",
          target: "intro",
          placement: "bottom"
        },
        {
          title: "What You See First",
          content: "After you load ActiveWorlds for the first time, and input your account information, you will land in what's called AlphaWorld Ground Zero.",
          target: "seefirst",
          placement: "right"
        },
        {
          title: "Teleport Menu",
          content: "The [Teleport] menu will be the primary way you navigate around ActiveWorlds. You can set your home point, add a place to your teleports list, or travel to a specific location.",
          target: "menu-teleport",
          placement: "bottom"
        },
        {
          title: "Options Menu",
          content: "The [Options] menu is where you can configure custom controls, modify browser settings, update your account information, and, if you have a world, manage its features, rights, and ejections.",
          target: "menu-options",
          placement: "bottom"
        },
        {
          title: "Avatars Menu",
          content: "Most worlds have a wide selection of classic avatars, and almost every world has Custom Avatars enabled, which let you mold your avatar to look like anyone you choose, and select clothing and accessories.",
          target: "menu-avatars",
          placement: "bottom"
        },
        {
          title: "Gestures",
          content: "Your avatar can perform a variety of gestures, and selecting [Continuous] will force your avatar to perform the gesture until [Continuous] is unselected.",
          target: "gestures",
          placement: "left"
        },
        {
          title: "Toolbar",
          content: "The toolbar, from left to right, contains the following buttons: Tab Controls, Home, Back, Forward, Look Up, Look Level, Look Down, Change Camera, First Person, Chase Camera, Front Camera, Freelook Mode, Enter AFK (Away From Keyboard) Mode, Build Mode, Show CAV Window, Voice Chat, Screenshot, Pano Screenshot, Presentation, Detach Movers, Buy Credits, Show Web Window, About.",
          target: "toolbar-overview",
          placement: "top"
        },
      ]
    };

    // Start the tour!
    hopscotch.startTour(tour);