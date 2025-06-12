import * as d3 from 'd3'

const createHalfCircle=(outline,left,rigth,value)=>{

   let arc = d3.arc()
      .innerRadius(0)      
      .outerRadius(120)   
      .startAngle(-Math.PI/2)        
      .endAngle(Math.PI/2);   

  let svgEl = d3.create('svg')
    .attr('width', 250)
    .attr('height', 100);

    svgEl.append("defs").append("marker")
  .attr("id", `arrow-${left}`)
  .attr("viewBox", "0 0 10 10")
  .attr("refX", 5)
  .attr("refY", 5)
  .attr("markerWidth", 10)
  .attr("markerHeight", 4)
  .attr("orient", "auto-start-reverse")
  .append("path")
  .attr("d", "M 0 0 L 10 5 L 0 10 z")
  .attr("fill", outline);


  let defs = svgEl.append('defs')
  
  let gradient = defs.append('linearGradient')
    .attr('id', `arc-gradient-${left}`)
    .attr('x1', '0%')
    .attr('y1', '0%')
    .attr('x2', '100%')
    .attr('y2', '0%')

  gradient.append('stop')
    .attr('offset', '0%')
    .attr('stop-color',left)

  gradient.append('stop')
    .attr('offset', '100%')
    .attr('stop-color', rigth)

  svgEl.append('g')
    .attr('transform', `translate(120, 120)`)
    .append('path')
    .attr('d', arc)
    .attr('fill', `url(#arc-gradient-${left})`)
    .attr('stroke', outline)
    .attr('stroke-width', 1)

  const angleScale = d3.scaleLinear()
  .domain([0, 100])
  .range([-Math.PI, 0]);

  const needleLength = 100;

  const angle = angleScale(value);
  const x = needleLength * Math.cos(angle);
  const y = needleLength * Math.sin(angle);


  svgEl.append("line")
    .attr("class", "needle")
    .attr("x1", 125)
    .attr("y1", 100)
    .attr("x2", 125 + x)
    .attr("y2", 100 + y)
    .attr("stroke", outline)
    .attr("stroke-width", 4)
    .attr("marker-end", `url(#arrow-${left})`);

  return svgEl.node();
}

export const createHalfGreenCircle = createHalfCircle.bind(null,'#248E70','#8AFFCE','#248E70');

export const createHalfRedCircle =createHalfCircle.bind(null,'#B80D0D','#FFCFCF','#FFA1A1');

