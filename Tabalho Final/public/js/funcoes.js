if(G.isSelected()){
				Posto mPreco = Cartel.get(0);
				Posto maxProx = Cartel.get(0);




				for (int i = 1; i < Cartel.size(); i++) { // procura o posto com menot valor do combustivel em questão
					if(Cartel.get(i).getCombustivel().getpGasolina() < mPreco.getCombustivel().getpGasolina()){
						mPreco = Cartel.get(i);
					}

					if(Cartel.get(i).getDistancia() < maxProx.getDistancia()){
						maxProx = Cartel.get(i);
					}

				}

				quantL_mPreco = (valAbt/mPreco.getCombustivel().getpGasolina());
				quantL_maxProx = (valAbt/maxProx.getCombustivel().getpGasolina());

				dif_L = quantL_mPreco - quantL_maxProx;

				disIdeal = (carro.getConsumo()*dif_L);

				for (int i = 0; i < Cartel.size(); i++) {
					if(Cartel.get(i).getDistancia() <= mPreco.getDistancia()){
						Cartel.get(i).setDif(Math.abs(Cartel.get(i).getDistancia() - disIdeal));
						disDif.add(Cartel.get(i));
					}
				}

				Posto mDif =  disDif.get(0);
				for (int i = 1; i < disDif.size(); i++) {
					if(disDif.get(i).getDif() <= mDif.getDif()){
						mDif = disDif.get(i);
					}
				}
				return mDif;
