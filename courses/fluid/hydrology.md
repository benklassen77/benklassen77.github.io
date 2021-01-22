# Hydrology

- [Hydrology](#hydrology)
  - [Intro to Water Resource Engineering](#intro-to-water-resource-engineering)
    - [Water Balance](#water-balance)
  - [Rainfall](#rainfall)

## Intro to Water Resource Engineering

- Water is essential for life
- Fresh potable water is rare
- Periods of too much and too little water can result from natural and anthropogenic causes
  - Naturally, availability varies widely
  - Humans interrupt water movement
- Water resource engineers perform a number of essential services
- Hydrology is the science that encompasses the distribution, movement, and properties of water on our planet

**Precipitation**: ... definitions add

![Hydrologic Cycle](https://i.imgur.com/WdAStTr.png?1)

- Climate change is real and it affects water resource engineering
  - Temperature and CO2 are higher than they've been in millions of years
  - Canada's warming rate is twice the global mean
  - 1ºC increase, a 100 year event might occur every 20 years. With a 3ºC increase, extreme events will occur in greater frequency
- What does climate change mean for water resource engineering
  1. Increases uncertainty of our predictions
  2. Local changes precipitation - less snowmelt, more and more powerful convective storms
  3. Design should consider impact on carbon dioxide
- We define watersheds based on topography to help keep track of water on and under the ground
  - A **watershed** is the area enclosed by a topographic divide such that surface runoff drains by gravity

In Southern Ontario, watersheds are managed by conservation authorities. They are mandated to ensure the conservation, restoration, and responsible management of Ontario's water, land and natural habitats through programs that balance human, environmental, and economic needs

### Water Balance

Inflows (I)

- P: precipitation
- $G_{in}$: groundwater in

Outflows (O)

- ET: evapotranspiration
- D: diversions from lake
- Q: runoff from watersheds draining directly into lake
- $G_{out}$: groundwater out

$$\frac{\Delta{S}}{\Delta{t}}=I-O\tag{Water Balance}$$

$$\frac{\Delta{S}}{\Delta{t}}=(P+G_{in})-(Q+ET+G_{out})$$

Finding P is easy (rain gauges). Finding Q is easy (pressure gauges). G is hard (tracers). ET is hard (evaporation pans).

Water budgets are performed on different time scales. Each decade, assessment of urban water use - will we need another reservoir? Annually, assessment of irrigation needs - should we add a pump? Monthly, assessment of dam operations - when should we open/close the gates? Daily, assessment of flood forecasting - when will the river crest? Hourly, assessment of storm water management - how big should the pipe be?

Performing an annual water budget is a common first step in hydrologic studies

![NTS](https://i.imgur.com/5Sb60dA.png?1)

How to estimate net basin supply? There are 2 options. The first is the component method

**Component method**: calculate NBS by estimating P, E, and Q for the watershed

- P: need distribution of gauges, including on the lakes (hard)
- E: need to estimate evaporation from the whole lake (hard)
- Q: need to measure all the inflows, but some rivers are ungauged, so tricky

**Residual Method**: see image below

![Residual](https://i.imgur.com/CyxtOVV.png?1)

## Rainfall

Toowoomba flood details

1. Unusually heavy rainfall had occurred in the preceding days, causing the city's waterways to become swollen.
2. 150 mm of rain fell on 10 January 2011
3. Around midday, an intense storm moved in from the northeast, completely overwhelming two tributaries of the river
4. Rainfall peak intensive was 144 mm/hr
5. The flood resulted in the death of 2 people and caused damage

Rainfall is measured with tipping buckets, rain gauges, radar, and passive microwave (satellite). Rainfall varies in both intensity and duration (see IDF Curves). A hyetograph of rainfall graphs 4 intervals of precipitation per hour (precipitation per 15 minute). Measured using a tipping bucket. These demonstrate intensity and duration

Intensity duration pairs are graphed as a **Intensity-Duration-Frequency (IDF) Curve**. This descripes the relationship between rainfall intensity, rainfall duration, and return period at a given location.

Procedure to construct an IDF curve:

1. For a given time interval, or *duration*, calculate the maximum amount of rain (**Annual Maximum Rainfal AMR**) that fell during that time interval during each year of record
2. Order the AMR values from highest to lowest and calculate the *return period (T)* for each using the Weibull formula (to get the rank). $T=\frac{n+1}{m}$. N is period of record (total number of years), T is return period, m is rank.
3. Interpolate between calculated values of T to find the depth of rainfall at a desired value of T (at easy return periods)
4. Repeat steps 1-2 for a range of durations
5. Connect the depth of rainfall/duration pairs for a given T
6. Divide each AMR value by the corresponding duration to calculate the average intensity

IDF curves generally have 2 year, 5 year, 10 year, 25 year, 50 year, and 100 year flood. An IDF curve is for one location. To understand how rainfall varies spatially, we can take use intensity-duration pairs from a bunch of different weather stations and draw contour lines to visualize the spatial patterns.

**Frequency analysis** is used to understand the probability that different types of events will occur within a certain period. This carries 2 key assumptions:

1. The types of future rainfall events are the same as historical events
2. The same probability distribution fits the entire data set and future data

If nature of rainfall events change, it's called a **statistically nonstationary time series**. Additionally, if rainfall is generated by different event types, frequency analysis is not statistically correct due to samples from different populations.

**T**: Return Period

**Bernoulli Trial**: experiment with repeated trials and only 2 possible outcomes (success or failure). The probability of success is the same from trail to trail and each trial is independend of the others. Eg. Coin Flig. If k times in n years, $P(k)=(\frac{n}{k})p^kq^{n-k}$, with p the probability of success (exceedance) and q the probability of failure (non-exceedance)

$$(\frac{n}{k})=\frac{n!}{k!(n-k)!}\tag{Combinatorics}$$

![Example Bernouli Trial](https://i.imgur.com/APSMa9a.png?1)

**Probability of failure $p_f$** is the probability that a certain event is exceeded at least once during the design life. This is equivalent to saying that it is the probability of 1 minus the probability that the event occurs zero times over the design life

![Example](https://i.imgur.com/EJ1aOz5.png?1)

To plan for extreme events, we often use the concept of the regional storm. The **regional storm** is the storm event for a general geographical area which produced the largest flow on record. This event is used in watershed studies to define floodplain

**Probable Maximum Precipitation PMP** is theoretically the greatest depth of precipitation for a given duration that is physically possible over a given size storm area at a particular geographical location at a certain time of year. The PMP is estimated by

- examination of the largest flood-producing storms in and around the region of interest
- using generalized PMP maps based on meteorological analysis of the largest storms in a large region
- using atmospheric models to estimate the PMP
- in Southern Ontario, the PM 6hr precipitation for a large (2600 km^2) watershed is approximately 300mm

## Isochrones and time of concentration

All the surface runoff will eventually make its way to the outlet point for the watershed. However, the water that falls far from the outlet or that has a very torturous/rough path to the outlet will take longer to get there than the water that falls close to the outlet or has a very straight/smooth path to the outlet. Isochrones are plotted

A hydrograph is a plot of discharge Q over time. If a storm happened where water falls at a constant intensity uniformly over a watershed, the hydrograph would increase until it hit the time of concentration.

**Time of concentration $t_c$** is the travel time for water to travel from the most distant point of the watershed to the outlets

Concession of flow:

1. **Sheet flow** is characterized by runoff that occurs as a continuous sheet of water flowing over the land surface. Typically sheet flow occurs for no more than 30m before it concentrates into small channels or rills
2. **Shallow concentrated flow** is flow in rills and small gullies
3. **Open channel flow** is the flow in pipes and creeks

To calculate $t_c$, the procedure is to estimate the time of concentration for each of the three components. $t_c=t_{sheet}+t_{shallow concentrated}+t_{channel}$

$$t_{\textrm{sheet}}=\frac{5.5}{\sqrt{P_{24}}}(\frac{nL_s}{\sqrt{S_o}})^{0.8}\tag{Manning Equation}$$

- P = mm,$S_o$ = m/m, n is from table, L in m

$$t_{\textrm{shallow concentrated}}=\frac{L_{sc}}{k\sqrt{S_o}}$$

- t in seconds, L length of flow in m, k is conveyance velocity in m/s

$$t_{|textrm{channel}}=\frac{L_{ch}}{V_{ch}}$$

- t in seconds

## Frequency-based design storms

Regional storms are not appropriate design for all infrastructure, as it would cost too much. Frequency based design occurs

1. Find IDF information.
2. Determine the design return period3
3. Determine rainfall duration
4. Determine rainfall intensity
5. Correct intensity for watershed size
6. Generate a rainfall hyetograph
