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
